<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Wall\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;

class IndexController extends AbstractRestfulController
{
    public function get($id)
    {
        $userTable = $this->serviceLocator->get('Wall\Model\UsersTable');
        die(var_dump($userTable));
        return array(
            'id' => 1,
            'username' => 'tbhot3ww',
            'email' => 'tbhot3ww@gmail.com',
            'avatar_id' => 12,
            'name' => 'Christopher',
            'surname' => 'Valles',
            'bio' => 'Game backend engineer. Entrepreneur. Airsofter. Apple fanboy. ACTC. Cooker. Sysadmin. ACSP. If you want to know more just ask!',
            'location' => 'London, United Kingdom',
            'gender' => 'Male'
        );
    }
    
    public function getList(){
    }
    public function create($data){
    }
    public function update($id, $data){
    }
    public function delete($id){
    }
}
