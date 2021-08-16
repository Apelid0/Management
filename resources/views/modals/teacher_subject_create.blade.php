<!-- Modal -->
<div class="modal fade" id="teacherSubjectCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--BODY-->
            <div class="modal-body">
                <label>Nome do Professor</label>
                <select name="name" id="name" class="form-control" id="exampleFormControlSelect1">
                    @foreach($teachers as $teacherNames)
                        <option
                            value="{{$teacherNames->id}}">{{$teacherNames->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
