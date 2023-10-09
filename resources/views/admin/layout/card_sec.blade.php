<div class="row mb-4">
                <div class="col-md-3">
                    <div class="d-flex align-items-center gap-3 dashboard-card">
                        <img src="{{url('admin./images/hat.png')}}" class="img-fluid" alt="">
                        <div>
                            <h3>Feature Course</h3>
                            <h2>{{$feature_courses}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <a href="{{url('admin_course_detail_all_student_page')}}">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="{{url('admin./images/student.png')}}" class="img-fluid" alt="">
                        <div>
                            <h3>Students</h3>
                   
                        
                            <h2>
                              {{$users}}
                           
                            </h2>
                           
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="{{url('admin./images/course.png')}}" class="img-fluid" alt="">
                        <div>
                            <h3>Free Course</h3>
                            <h2>{{$free_courses}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="d-flex align-items-center gap-4 dashboard-card">
                        <img src="{{url('admin./images/video.png')}}" class="img-fluid" alt="">
                        <div>
                            <h3>Videos</h3>
                            <h2>187</h2>
                        </div>
                    </div>
                </div>
            </div>