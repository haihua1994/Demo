<?php

namespace Admin\Logic;

use Think\Model;

class AdminLogic extends Model
{
	public function allUsers($name='')
	{
		$map='';
		$join = 'as a left join __ROLE_USER__ as c on a.id=c.user_id left join __ROLE__ as d on c.role_id=d.id';

		if (!empty($name)) {

			$map['a.name'] = $name;
			$data = $this
				->field('a.id,a.name,a.email,is_active,current_login_time,d.name as role_name')
				->join($join)
				->where("a.name ='%s'",$name)
				->group('a.id')
				->select();
		}else{
			$data = $this
				->field('a.id,a.name,a.email,is_active,current_login_time,d.name as role_name')
				->join($join)
				->group('a.id')
				->select();
		}
		return $data;
	}

	public function allUserId()
	{
		return $this->getField('id',true);
	}
}