
<?php
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'admin';
    protected $fillable = ['name', 'email'];
    public $timestamps = false;
}