<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubData extends Model
{
    // protected $table = "club_data";
    use HasFactory;
    public static function getColumnForSorting($value)
    {

        $list = [
            0 => 'id',
            1 => 'created_by',
            2 => 'club_id',
            3 => 'name',
            4 => 'created_at'
        ];

        return isset($list[$value]) ? $list[$value] : "";
    }

    public function getAllData($request = null, $flag = false)
    {
        if (isset($request['order'])) {
            $columnNumber = $request['order'][0]['column'];
            $order = $request['order'][0]['dir'];
        } else {
            $columnNumber = 3;
            $order = "desc";
        }

        $column = self::getColumnForSorting($columnNumber);
        if ($columnNumber == 0) {
            $order = "desc";
        }

        if (empty($column)) {
            $column = 'id';
        }
        $query = self::where('created_by',auth()->user()->id)->orderBy($column, $order);
        if (!empty($request)) {

            $search = $request['search']['value'];

            if (!empty($search)) {
                $query->where(function ($query) use ($request, $search) {
                    $query->orWhere('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('club_id', 'LIKE', '%' . $search . '%');
                        $query->orWhereHas('user', function ($query) use ($search) {
                            $query->where(function ($query) use ($search) {
                                $query->orWhere('full_name', 'LIKE', '%' . $search . '%');
                            });
                        });
                        $query->orWhereHas('club', function ($query) use ($search) {
                            $query->where(function ($query) use ($search) {
                                $query->orWhere('club_name', 'LIKE', '%' . $search . '%');
                            });
                        });
                });

                if ($flag)
                    return $query->count();
            }

            $start = $request['start'];
            $length = $request['length'];
            $query->offset($start)->limit($length);


        }

        $query = $query->with('user:id,full_name','club:id,club_name')->get();
        return $query;
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','created_by');
    }
    public function club()
    {
        return $this->hasOne(Club::class,'id','club_id');
    }
}
