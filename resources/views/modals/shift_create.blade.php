<!-- Modal -->
<div class="modal fade" id="shiftCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!--BODY-->

                    @csrf

                    <p>Shift Start</p>
                    <div class="inline-flex text-lg border rounded-md shadow-lg p-2">
                        <select name="start_hour" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">10</option>
                            <option value="12">12</option>
                        </select>
                        <span class="px-2">:</span>
                        <select name="start_minute" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="00">00</option>
                            <option value="01">30</option>
                        </select>
                        <select name="start_ampm" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>

                    <br>
                    <p>Shift End</p>
                    <div class="inline-flex text-lg border rounded-md shadow-lg p-2">
                        <select name="end_hour" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">10</option>
                            <option value="12">12</option>
                        </select>
                        <span class="px-2">:</span>
                        <select name="end_minute" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="00">00</option>
                            <option value="01">30</option>
                        </select>
                        <select name="end_ampm" id="" class="px-2 outline-none appearance-none bg-transparent">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>

                    <br>

                    <label>Courses:</label>
                    <select name="course" id="course">
                    @foreach ($school_courses as $courses)
                        <option value="{{$courses->course->id}}">{{$courses->course->name}}</option>
                    @endforeach
                    </select>


               
            <!--END BODY-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
