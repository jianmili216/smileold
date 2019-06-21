
<?php
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'yaf';
    protected $fillable = ['name', 'email'];
    public $timestamps = false;
}