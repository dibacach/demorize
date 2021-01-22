@for($row=0; $row < 6; $row++)
    <div class="row">
        @for($column=0; $column < 6; $column++)
        <div class="col-2 text-center rotate-back" id="card_content_{{$row}}_{{$column}}" onclick="rotate({{$row}},{{$column}});">
            <a href="#" class="text-primary d-flex justify-content-center">
                <div class="tile-back p-3 text-center justify-content-center align-items-center" id="card_face_{{$row}}_{{$column}}">
                    <i class="fa-4x" id="card_{{$row}}_{{$column}}"></i>
                    <input type="hidden" id="card_image_{{$row}}_{{$column}}" value="{{$pcards[$row][$column]}}" />
                </div>
            </a>
        </div>
        @endfor
    </div>
@endfor