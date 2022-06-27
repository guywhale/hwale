<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PagePreview extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pagePreview = new FieldsBuilder('page_preview');

        $pagePreview
            ->setLocation('post_type', '==', 'page');

        $pagePreview
            ->addImage('preview_image')
            ->addTextarea('preview_text');

        return $pagePreview->build();
    }
}
