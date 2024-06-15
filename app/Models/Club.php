<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    public static function getColumnForSorting($value)
    {

        $list = [
            0 => 'id',
            1 => 'club_name',
            2 => 'status',
            3 => 'user_id',
            4 => 'created_at',
            5 => 'update_at',
        ];

        return isset($list[$value]) ? $list[$value] : "";
    }

    public function getAllClubs($request = null, $flag = false)
    {
        if (isset($request['order'])) {
            $columnNumber = $request['order'][0]['column'];
            $order = $request['order'][0]['dir'];
        } else {
            $columnNumber = 4;
            $order = "desc";
        }

        $column = self::getColumnForSorting($columnNumber);
        if ($columnNumber == 0) {
            $order = "desc";
        }

        if (empty($column)) {
            $column = 'id';
        }
        $query = self::orderBy($column, $order);


        if (!empty($request)) {

            $search = $request['search']['value'];

            if (!empty($search)) {
                $query->where(function ($query) use ($request, $search) {
                    $query->orWhere('club_name', 'LIKE', '%' . $search . '%');
                    // ->orWhere('email', 'LIKE', '%' . $search . '%')
                    // ->orWhere('created_at', 'LIKE', '%' . $search . '%');
                });

                // if (empty(strcasecmp("Inactive", $search))) {
                //     $query->orWhere('status', 0);

                // }
                // if (empty(strcasecmp("Active", $search))) {
                //     $query->orWhere('status', 1);

                // }

                // if(is_int(stripos("Inactive", $search))){
                //           $query->orWhere( 'status',  0);

                //       }
                // if(is_int(stripos("Active", $search))){
                //            $query->orWhere( 'status',  1);

                //        }


                if ($flag)
                    return $query->count();
            }

            $start = $request['start'];
            $length = $request['length'];
            $query->offset($start)->limit($length);


        }

        $query = $query->get();
        return $query;
    }
    public function getStatus()
    {

        $list = [
            self::STATUS_ACTIVE => "Active",
            self::STATUS_INACTIVE => "Inactive"
        ];

        return isset($list[$this->status]) ? $list[$this->status] : "Not defined";
    }

    public function getStatusBadge()
    {

        $list = [
            self::STATUS_ACTIVE => "success",
            self::STATUS_INACTIVE => "danger"
        ];

        return isset($list[$this->status]) ? $list[$this->status] : "danger";
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
