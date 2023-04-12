<?php 
// declare(strict_types = 1);

namespace Registration\Demo\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;

class CustomerDisplay implements ResolverInterface
{

protected $_group;
public function __construct(
    GroupFactory $group
){
    $this->_group=$group;
}



    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        Array $value = null,
        array $args = null
    ) {
        try{
            $data=[
                'customer_group_code'=>$args['input']['groupName'],
                'tax_class_id'=>4
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
        
    return [
        'groupId' => 1,
        'groupName' =>"Embitel"
    ];
} catch(\Throwable $th){
    $th->getMessage();
}
     
    
    }
    }