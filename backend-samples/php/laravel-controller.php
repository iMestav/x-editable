<?php

class SerieController extends BaseController
{
    public function postQuickUpdate()
    {
        $inputs = Input::all();
        
        $data[$inputs['name']] = $inputs['value'];

        $serie = Serie::find($inputs['pk']);

        $serie->fill($data);

        return $serie->save();
    }
}

/*
The blade template.
<span class='video-editable' data-emptytext='Click to add YouTube Video' data-type='text' data-url='{{ URL::route('serie/quick_update') }}' data-pk="{{ $serie->id }}" data-name='video'>
    {{ nl2br($serie->video) }}
</span>
*/
