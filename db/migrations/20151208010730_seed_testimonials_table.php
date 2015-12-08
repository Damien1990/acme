<?php

use Phinx\Migration\AbstractMigration;

class SeedTestimonialsTable extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            insert into testimonials (title, testimonial, user_id)
            values
            ('Great trip!', 'Trip of a lifetime. I recommend this.', 1)
        ");
    }

    public function down()
    {

    }
}
