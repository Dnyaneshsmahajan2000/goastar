<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            ['name' => 'Bhola Shankar', 'email' => 'bholashankar@gmail.com', 'mobile' => '9876543210', 'gender' => 'Male', 'role_id' => 1, 'ledger_id' => 7, 'pin' => '1234', 'salary' => '10000', 'permission' => 'a:48:{s:4:"Home";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Masters";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Ledgers";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:8:"Employee";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:19:"Expenses_Categories";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Journal";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:6:"Godown";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:4:"Sale";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:8:"Purchase";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:8:"Machines";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:11:"Sale_Return";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:15:"Purchase_Return";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Receipt";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:8:"Expenses";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Payment";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:7:"Reports";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:5:"Order";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:13:"Stock_journal";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:6:"Groups";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:11:"Item_Groups";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:13:"Item_Category";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:31:"Items(Finish Good/Raw Material)";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:17:"Employee_Expenses";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:19:"Employee_Attendance";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:24:"Verfiy_Employee_Expenses";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:24:"Generate_Employee_Salary";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:13:"Manufacturing";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:10:"Day_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:13:"Ledger_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:12:"Group_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:24:"Godown_Wise_Stock_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:24:"Minimum_Stock_Qty_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:11:"Sale_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:18:"Sale_Return_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:15:"Purchase_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:22:"Purchase_Return_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:22:"30_Days_debtors_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:28:"Sale_Order_Difference_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:17:"Inactive_Customer";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:17:"Receivable_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:14:"Payable_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:22:"Item_Wise_Stock_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:14:"Payment_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:14:"Receipt_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:19:"Bank_Balance_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:20:"Order_Summary_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:12:"Order_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}s:23:"Highest_Customer_Report";a:2:{s:3:"add";s:1:"1";s:6:"update";s:1:"1";}}', 'password' => '$2y$12$MEj.JH8I7OjUkGWfm87hL.z.o78tNH8KB3QrKpvpWbnWw1/23tIcO'],              ];

        DB::table('users')->insert($users);
    }
}
