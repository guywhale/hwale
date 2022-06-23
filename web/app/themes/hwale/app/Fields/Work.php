<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Work extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $work = new FieldsBuilder('work');

        $work
            ->setLocation('post_type', '==', 'work');

        $work
            ->addLink('site_link');

        return $work->build();
    }
}
