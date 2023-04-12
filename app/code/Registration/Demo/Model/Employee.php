<?php 

namespace Registration\Demo\Model;
use Magento\Customer\Model\GroupFactory;

class Employee implements \Registration\Demo\Api\EmployeeInterface
{
    
        protected $_group;
    public function __construct(
        GroupFactory $group
    ){
        $this->_group=$group;
    }
    /**
     * Get name 
     * 
     * @return array
     */
    public function getProfile() {
        return [[
            'First Name'    =>    'Adam',
            'Last Name'     =>    'Hussain',
            'Email'         =>    'Adam@123.com',
            'Mobile'        =>    '9876543211',
            'City'          =>    'Vizag',
            'State'         =>    'Amaravathi',
            'Country'       =>    'India'
        ],
        
        [
            'First Name'    =>    'Hussain',
            'Last Name'     =>    'Adam',
            'Email'         =>    'Hussain@123.com',
            'Mobile'        =>    '1234567891',
            'City'          =>    'Kurnool',
            'State'         =>    'Amaravathi',
            'Country'       =>    'India'
        ],
        
        [
            'First Name'    =>    'Sharuk',
            'Last Name'     =>    'Adam',
            'Email'         =>    'Sharuk@123.com',
            'Mobile'        =>    '1237894561',
            'City'          =>    'Bangalore',
            'State'         =>    'Karnataka',
            'Country'       =>    'India'
        ]];
    }


/**
 * set data
 * 
 * @param string[] $postdata
 * @return array
 */
   Public function setCustomList($postdata){
    
    try{
        $data=[
            'customer_group_code'=>$postdata['groupName'],
            'tax_class_id'=>3
        ];
        $group = $this->_group->create();
        $group->setData($data);
        $group->save();
        
        return[
            'GroupId' => 1,                
            'GroupName' => "Technology Groups"  
        ];
    }catch (\Throwable $th) {
        $th->getMessage();
    }
}

}

?>