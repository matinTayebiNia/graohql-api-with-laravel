<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Lean Startup',
            'user_id' => 1,
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-lean-startup.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Lean-Startup-Entrepreneurs-Continuous-Innovation/dp/0307887898/ref=sr_1_2/133-5239949-7549327?ie=UTF8&qid=1545650084&sr=8-2&keywords=learn+startup',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Rework',
            'user_id' => 1,
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/rework.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Rework-Jason-Fried/dp/0307463745/ref=sr_1_2?ie=UTF8&qid=1545650510&sr=8-2&keywords=rework',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Sapiens',
            'user_id' => 1,
            'image' => 'sapiens.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Sapiens-Humankind-Yuval-Noah-Harari/dp/0062316117/ref=sr_1_1?ie=UTF8&qid=1545650642&sr=8-1&keywords=sapiens',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Steve Jobs',
            'user_id' => 1,
            'image' => 'steve-jobs.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Steve-Jobs-Walter-Isaacson-ebook/dp/B004W2UBYW/ref=sr_1_3?ie=UTF8&qid=1545650905&sr=8-3&keywords=steve+jobs',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Jab, Jab, Jab, Right Hook',
            'user_id' => 1,
            'image' => 'jab-jab-jab-right-hook.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Jab-Right-Hook-Story-Social/dp/006227306X/ref=sr_1_1?ie=UTF8&qid=1545650972&sr=8-1&keywords=jab+jab+jab+right+hook',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Tribe of Mentors',
            'user_id' => 1,
            'image' => 'tribe-of-mentors.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Tribe-Mentors-Short-Advice-World/dp/1328994961/ref=sr_1_1?ie=UTF8&qid=1545651049&sr=8-1&keywords=tribe+of+mentors',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'The Millionaire Fastlane',
            'user_id' => 1,
            'image' => 'the-millionaire-fastlane.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Millionaire-Fastlane-Crack-Wealth-Lifetime/dp/0984358102/ref=sr_1_1?ie=UTF8&qid=1545651190&sr=8-1&keywords=the+millionaire+fastlane',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'Hooked: How to Build Habit-Forming Products',
            'user_id' => 1,
            'image' => 'hooked.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Hooked-How-Build-Habit-Forming-Products/dp/1591847788/ref=sr_1_1?ie=UTF8&qid=1545651286&sr=8-1&keywords=hooked',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'Good to Great',
            'user_id' => 1,
            'image' => 'good-to-great.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Good-Great-Some-Companies-Others/dp/0066620996/ref=sr_1_1?ie=UTF8&qid=1545651367&sr=8-1&keywords=good+to+great',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'How to win friends and influence people',
            'user_id' => 1,
            'image' => 'how-to-win-friends-and-influence-people.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/How-Win-Friends-Influence-People/dp/0671027034/ref=sr_1_3?ie=UTF8&qid=1546013739&sr=8-3&keywords=how+to+win+friends+and+influence+people+by+dale+carnegie',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'Tools of Titans',
            'user_id' => 1,
            'image' => 'tools-of-titans.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Tools-Titans-Billionaires-World-Class-Performers/dp/1328683788/ref=sr_1_1?ie=UTF8&qid=1546013862&sr=8-1&keywords=tools+of+titans',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'Influence',
            'user_id' => 1,
            'image' => 'influence.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Influence-Psychology-Persuasion-Robert-Cialdini/dp/006124189X/ref=sr_1_3?ie=UTF8&qid=1546013978&sr=8-3&keywords=influence',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'The Personal MBA',
            'user_id' => 1,
            'image' => 'the-personal-mba.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Personal-MBA-Master-Art-Business/dp/1591845572/ref=sr_1_1?ie=UTF8&qid=1546223949&sr=8-1&keywords=personal+mba',
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'The 80/20 Principle',
            'user_id' => 1,
            'image' => 'the-80-20-principle.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/80-20-Principle-Third-Achieving-ebook/dp/B000SEGG5G/ref=sr_1_1?ie=UTF8&qid=1546224042&sr=8-1&keywords=80+principle',
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'The 10X Rule',
            'user_id' => 1,
            'image' => 'the-10x-rule.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/10X-Rule-Difference-Between-Success/dp/0470627603/ref=sr_1_1?ie=UTF8&qid=1546224133&sr=8-1&keywords=10x+rule',
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'Start with Why',
            'user_id' => 1,
            'image' => 'start-with-why.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Start-Why-Leaders-Inspire-Everyone/dp/1591846447/ref=sr_1_1?ie=UTF8&qid=1546224550&sr=8-1&keywords=start+with+why',
            'category_id' => 4
        ]);

        Book::create([
            'title' => 'Smarter Faster Better',
            'user_id' => 1,
            'image' => 'smarter-faster-better.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Smarter-Faster-Better-Transformative-Productivity/dp/0812983599/ref=sr_1_1?ie=UTF8&qid=1546224617&sr=8-1&keywords=smarter+faster+better',
            'category_id' => 4
        ]);

        Book::create([
            'title' => 'Springboard',
            'user_id' => 1,
            'image' => 'springboard.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Springboard-Launching-Personal-Search-Success/dp/1591847001/ref=sr_1_1?ie=UTF8&qid=1546224753&sr=8-1&keywords=springboard',
            'category_id' => 4
        ]);

        Book::create([
            'title' => 'Secret Sauce',
            'user_id' => 1,
            'image' => 'secret-sauce.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Secret-Sauce-Ultimate-Growth-Hacking/dp/1635877393/ref=sr_1_7?ie=UTF8&qid=1546224858&sr=8-7&keywords=secret+sauce',
            'category_id' => 5
        ]);

        Book::create([
            'title' => 'Netflixed',
            'user_id' => 1,
            'image' => 'netflixed.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Netflixed-Epic-Battle-Americas-Eyeballs/dp/1591846595/ref=sr_1_1?ie=UTF8&qid=1546224961&sr=8-1&keywords=netflixed+book',
            'category_id' => 5
        ]);

        Book::create([
            'title' => 'Marketing for Developers',
            'user_id' => 1,
            'image' => 'marketing-for-developers.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://devmarketing.xyz',
            'category_id' => 5
        ]);

        Book::create([
            'title' => 'Drive',
            'user_id' => 1,
            'image' => 'drive.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Drive-Surprising-Truth-About-Motivates/dp/1594484805/ref=sr_1_1?ie=UTF8&qid=1546225150&sr=8-1&keywords=drive+daniel+pink',
            'category_id' => 6
        ]);

        Book::create([
            'title' => 'Deep Work',
            'user_id' => 1,
            'image' => 'deep-work.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Deep-Work-Focused-Success-Distracted/dp/1455586692/ref=sr_1_2?ie=UTF8&qid=1546225207&sr=8-2&keywords=deep+work',
            'category_id' => 6
        ]);

        Book::create([
            'title' => 'Crushing It',
            'user_id' => 1,
            'image' => 'crushing-it.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Crushing-Great-Entrepreneurs-Business-Influence/dp/0062674676/ref=sr_1_2?ie=UTF8&qid=1546225290&sr=8-2&keywords=crushing+it',
            'category_id' => 6
        ]);
    }
}
