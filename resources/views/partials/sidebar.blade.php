<div class="col-md-4 col-xl-3">
              <div class="sidebar px-4 py-md-0" style="background-color:white">

                <h6 class="sidebar-title" style="background-color:#a5d9e6;border-radius:2px 3px;margin-top:10px">Search</h6>
                <form class="input-group" action="{{route('welcome')}}" method="GET">
                  <input type="text" style="border:2px solid #a5d9e6" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
                  <div class="input-group-addon">
                    <button type="submit" class="form-control" style="cursor:pointer;"><span class="input-group-text"><i class="fas fa-search"></i></span></button>
                  </div>
                </form>

                <hr>

                <h6 class="sidebar-title" style="background-color:#a5d9e6;border-radius:2px 3px;margin-top:10px" >Categories</h6>
                <div class="row link-color-default fs-14 lh-24">
                @foreach($category as $cat)
                  <div class="col-6" ><a href="{{route('find',$cat->id)}}">{{$cat->name}}</a></div>
                @endforeach
                </div>
                <hr>

                <h6 class="sidebar-title" style="background-color:#a5d9e6;border-radius:2px 3px;margin-top:10px">Pict Of The Day</h6>
                    @foreach($pict as $pict)
                    <img src="{{url('/image/'.$pict->pictGambar)}}" alt="{{$pict->gambar}}">
                    @endforeach
                <hr>

                <h6 class="sidebar-title" style="background-color:#a5d9e6;border-radius:2px 3px;margin-top:10px">Tags</h6>
                <div class="gap-multiline-items-1">
                @foreach($tags as $tag)
                  <a class="badge badge-secondary" href="{{route('post.tag',$tag->id)}}">{{$tag->name}}</a>
                @endforeach
                </div>

                <hr>

                <h6 class="sidebar-title" style="background-color:#a5d9e6;border-radius:2px 3px;margin-top:10px">About</h6>
                <p class="small-3" style="color:#757575">
                    orstyle.id merupakan media fashion yang akan mengulik seputar inspirasi dan teknologi didalam fashion.
                </p>


              </div>
            </div>