<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $pageId = '';

        if (isset($this->page->id)) {
            $pageId = $this->page->id;
        }

        return [
            'url' => 'required|unique:pages,url,'.$pageId,
            'title' => 'required',
            'name' => 'required',
            'content' => 'required',
        ];
    }
}
