<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1;$i<30;$i++){
            DB::table('articles')->insert([
                'title' => 'Lorem Ipsum',
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in tempor dolor, non posuere felis. Donec consequat libero in nibh interdum, sed accumsan mi malesuada. Vestibulum ut efficitur enim, eget fringilla orci. Vivamus ac lacus sed neque efficitur fermentum. Aliquam varius pellentesque augue, nec pellentesque ex eleifend sit amet. Suspendisse nec eleifend metus. Nullam volutpat erat iaculis tortor viverra rhoncus. Aenean vel tincidunt libero. Sed in finibus ante.
                Phasellus tempor et tortor nec vulputate. Phasellus pretium interdum mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor libero, vulputate non facilisis sed, vulputate luctus quam. Curabitur scelerisque nibh eu sapien fermentum, non laoreet massa vestibulum. Curabitur eget risus lectus. Vestibulum mattis metus ac lectus tincidunt aliquam. Quisque in mi pulvinar, dapibus tortor sed, viverra turpis. Sed molestie eleifend fringilla. Etiam interdum, tortor vel aliquet pharetra, tellus eros pretium mi, at ultricies ligula ipsum et ex. Vivamus nec orci sed metus luctus molestie id eget purus.
                Donec at lobortis diam. Nunc nibh nisl, accumsan eu neque non, tempor lacinia lectus. Vivamus ultricies ornare eros, in volutpat nibh scelerisque sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus a nibh sagittis accumsan. Nam ac erat sed turpis eleifend malesuada. Cras ac eros vel sapien convallis auctor et at diam.
                Proin commodo nibh libero, vel pretium nisi hendrerit non. Nulla nec augue vel justo mollis laoreet. Sed id commodo justo. Ut bibendum cursus pellentesque. Sed posuere vel felis sed lacinia. Ut placerat nunc in vestibulum pellentesque. Pellentesque sagittis felis in quam hendrerit, vitae tincidunt urna rhoncus. In blandit eu nisi et viverra. Mauris quis dictum enim. Suspendisse accumsan facilisis molestie.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque mollis eleifend erat ac rhoncus. Nulla ac leo nisi. Duis sit amet odio eget ex ullamcorper ornare. Nulla ut dignissim massa. Sed maximus placerat sollicitudin. Aenean condimentum imperdiet nunc quis imperdiet. Nam in accumsan dui.',
                'subject_id' => random_int(0,9),
                'writer' => 'Jonas Van Reeth',
            ]);
        }
    }
}
