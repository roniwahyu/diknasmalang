
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => __('home'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'audits',
			'label' => __('audits'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'audittrail',
			'label' => __('audittrail'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'datanonasn2022bkpsdm',
			'label' => __('dataNonAsn2022Bkpsdm'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'groups',
			'label' => __('groups'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'groupspermissions',
			'label' => __('groupsPermissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'loginattempts',
			'label' => __('loginAttempts'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'logs',
			'label' => __('logs'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'masterdapodik',
			'label' => __('masterdapodik'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'namasekolah',
			'label' => __('namasekolah'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'penganggaran2024',
			'label' => __('penganggaran2024'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'permissions',
			'label' => __('permissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'role',
			'label' => __('role'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'rolepermissions',
			'label' => __('rolePermissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'session',
			'label' => __('session'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'skemapagusd',
			'label' => __('skemaPaguSd'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'skemapagusddetail',
			'label' => __('skemaPaguSdDetail'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'skemapagusmp',
			'label' => __('skemaPaguSmp'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'skemapagusmpdetail',
			'label' => __('skemaPaguSmpDetail'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'users',
			'label' => __('users'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'usersgroups',
			'label' => __('usersGroups'), 
			'icon' => '<i class="fa fa-globe"></i>'
		],
		
		[
			'path' => 'userspermissions',
			'label' => __('usersPermissions'), 
			'icon' => '<i class="fa fa-globe"></i>'
		]
	] ;
	}
	
		
	public static function isactive(){
		return [
		[
			'value' => '1', 
			'label' => __('1'), 
		],
		[
			'value' => '0', 
			'label' => __('0'), 
		],] ;
	}
	
	public static function task(){
		return [
		[
			'value' => 'Create', 
			'label' => __('create'), 
		],
		[
			'value' => 'Read', 
			'label' => __('read'), 
		],
		[
			'value' => 'Update', 
			'label' => __('update'), 
		],
		[
			'value' => 'Delete', 
			'label' => __('delete'), 
		],
		[
			'value' => 'Attack', 
			'label' => __('attack'), 
		],] ;
	}
	
	}
