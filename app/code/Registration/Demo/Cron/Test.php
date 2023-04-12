<?php 
namespace Registration\Demo\Cron;



class Test {
    
    public function execute() {
        $current_date = date('YMd_his');
        $file_name = 'customer'.$current_date.'.csv';

        $header_info = array(
            'Firstname',
            'Lastname',
            'Email',
            'Mobile'
        );
        
        $header_info = array_combine($header_info,$header_info);
        $data = [];
        
        $data[] = $header_info;
        
        $data[] = [
            'Firstname' => 'Adam',
            'Lastname'  => 'Hussain',
            'Email'     => 'adamhussain@emb.com',
            'Mobile'    => '1231234561'
        
        ];

        $data[] = [
            'Firstname' => 'Sharuk',
            'Lastname'  => 'Hussain',
            'Email'     => 'hussain@emb.com',
            'Mobile'    => '9876543219'
        
        ];

        // $data[] = [
        //     'Firstname' => 'Adam',
        //     'Lastname'  => 'Adam',
        //     'Email'     => 'adam@emb.com',
        //     'Mobile'    => '1231236541'
        
        // ];

        $fp = fopen('/var/www/html/magento2/var/export/'.$file_name, 'w');
        foreach ($data as $fields) {
           fputcsv($fp, $fields);
        }
    }
}

