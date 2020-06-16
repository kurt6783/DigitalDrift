<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        // // 头像假数据
        // $avatars = [
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
        //     'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
        // ];

        // 生成数据集合
        $users = factory(User::class)
                        ->times(1)
                        ->make()
                        ->each(function ($user, $index)
                            use ($faker)
        {

        });

        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users->makeVisible(['password'])->toArray();

        // 插入到数据库中
        User::insert($user_array);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@example.com';
        $user->save();

    }
}