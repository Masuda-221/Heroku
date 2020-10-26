{"filter":false,"title":"edit.blade.php","tooltip":"/mynews/resources/views/admin/news/edit.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":53,"column":11},"action":"insert","lines":["@extends('layouts.admin')","@section('title', 'ニュースの編集')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース編集</h2>","                <form action=\"{{ action('Admin\\NewsController@update') }}\" method=\"post\" enctype=\"multipart/form-data\">","                    @if (count($errors) > 0)","                        <ul>","                            @foreach($errors->all() as $e)","                                <li>{{ $e }}</li>","                            @endforeach","                        </ul>","                    @endif","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\" for=\"title\">タイトル</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ $news_form->title }}\">","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\" for=\"body\">本文</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ $news_form->body }}</textarea>","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\" for=\"image\">画像</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                            <div class=\"form-text text-info\">","                                設定中: {{ $news_form->image_path }}","                            </div>","                            <div class=\"form-check\">","                                <label class=\"form-check-label\">","                                    <input type=\"checkbox\" class=\"form-check-input\" name=\"remove\" value=\"true\">画像を削除","                                </label>","                            </div>","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <div class=\"col-md-10\">","                            <input type=\"hidden\" name=\"id\" value=\"{{ $news_form->id }}\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"更新\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":49,"column":23},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":50,"column":0},"end":{"row":50,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":50,"column":16},"end":{"row":65,"column":11},"action":"insert","lines":["<div class=\"row mt-5\">","                    <div class=\"col-md-4 mx-auto\">","                        <h2>編集履歴</h2>","                        <ul class=\"list-group\">","                            @if ($news_form->histories != NULL)","                                @foreach ($news_form->histories as $history)","                                    <li class=\"list-group-item\">{{ $history->edited_at }}</li>","                                @endforeach","                            @endif","                        </ul>","                    </div>","                </div>","            </div>","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":66,"column":11},"end":{"row":69,"column":11},"action":"remove","lines":[" </div>","        </div>","    </div>","@endsection"],"id":5}],[{"start":{"row":66,"column":10},"end":{"row":66,"column":11},"action":"remove","lines":[" "],"id":6},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":[" "]},{"start":{"row":66,"column":8},"end":{"row":66,"column":9},"action":"remove","lines":[" "]},{"start":{"row":66,"column":4},"end":{"row":66,"column":8},"action":"remove","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"remove","lines":["    "]},{"start":{"row":65,"column":11},"end":{"row":66,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":244,"scrollleft":0,"selection":{"start":{"row":65,"column":11},"end":{"row":65,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/php"}},"timestamp":1603438685965,"hash":"ef753f22efc8c8241f37b08f7edf32e2abde3f17"}