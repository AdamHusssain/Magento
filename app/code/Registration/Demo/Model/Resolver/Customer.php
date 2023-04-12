<?php 
declare(strict_types = 1);

namespace Registration\Demo\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
// use Magento\Framework\Exception\NoSuchEntityException;
// use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
// use Magento\Framework\GraphQl\Exception\GraphQlInputException;
// use Magento\Customer\Model\GroupFactory;

class Customer implements ResolverInterface{

//     protected $_group;
//     public function __construct(
//         Groupfactory $group
//     ) {
//         $this->_group=$group;
//     }

    public function resolve (
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $customer =[
            [
            'firstname' => 'Adam',
            'lastname'  => 'Hussain',
            'email'     => 'adamhussain@emb.com',
            'mobile'    => '1231234561',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],

        [   'firstname' => 'Hussain',
            'lastname'  => 'Hussain',
            'email'     => 'adam@emb.com',
            'mobile'    => '1234561231',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'

        ],

        [
           'firstname' => 'Adam',
           'lastname'  => 'Adam',
           'email'     => 'hussain@emb.com',
           'mobile'    => '9876543211',
           'city'      => 'Bangalore',
           'state'     => 'Karnataka',
           'country'   => 'India'

       ]
       ];

    return [
        'total_count'=>count($customer),
        'items'=>$customer
    ];
     
    
    }
}


