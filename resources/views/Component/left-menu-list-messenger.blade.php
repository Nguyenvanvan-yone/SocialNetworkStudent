 <!-- LEFT MENU MESSENGER -->
 <div class="w-1/3 lg:w-3/12 md:w-1/3 pt-16 h-full flex flex-col fixed top-0 left-0 shadow-md overflow-y-auto bg-white">
        <div class="flex justify-between items-center p-4">
            <div class="flex justify-start items-center">
                <a href="{{ route('show_friends')}}" class="">
                    <div class="rounded-full w-8 h-8 bg-gray-200 text-gray-500 grid place-content-center">
                        <i class="bx bx-left-arrow-alt text-xl "></i>
                    </div>
                </a>
                <h2 class="ml-4 text-2xl font-semibold">Chat</h2>
            </div>
            <div class="flex justify-between items-center">
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                </div>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bx-camera-movie"></i>
                </div>
                <div class="text-xl hidden xl:grid place-items-center bg-gray-200
                dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-2 cursor-pointer hover:bg-gray-300 relative">
                    <i class="bx bxs-edit"></i>
                </div>
            </div>
        </div>
        <div class="relative rounded-full bg-gray-100 mx-3">
            <div class=" absolute left-4 top-1/2 transform -translate-y-2 text-gray-500">
                <i class='bx bx-search text-xl'></i>
            </div>
            <form action="#" method="post">
                <input type="text" class="w-4/5 ml-10 rounded-full p-2 outline-none bg-transparent" placeholder="Search friends..." name="search_friend" >
            </form>
        </div>
        <div class="border-b border-gray-200 dark:border-dark-third mx-4 py-2"></div>
        <div class=" text-xl text-left px-4 pt-2 font-semibold text-gray-800">{{ $qtyfriend}} Friends</div>
        <ul class="p-4 " id="list-friends">
             <?php
                use App\http\Controllers\UsersController;
            ?>
            @if(!empty($friends))  
                @foreach ($friends as $key => $listfriend)
                    @if(statusFriend(Auth::user()->id,$listfriend->id) == 'Accepted')
                    <li >
                        <div class="flex items-center space-x-4 p-2 hover:bg-gray-100
                        dark:hover:bg-dark-third dark:text-dark-txt rounded-lg cursor-pointer showConversition" data-id="{{ $listfriend->id}}" id="conversition-{{ $listfriend->id}}">
                            <div class="relative" id="notification-{{$listfriend->id}}">
                                @if(getNotifiMes($listfriend->id))
                                <span class="bg-red-500  rounded-full absolute -right-2 -top-1 w-5 h-5 flex items-center justify-center text-white pending">{{ getNotifiMes($listfriend->id)}}</span>
                                @endif
                                <img src=" {{URL::to('/image/'.$listfriend->avatar)}}" class="rounded-full w-10 h-10 object-cover" alt="">
                                <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                            </div>
                            <div>
                                <span class=" name-{{$listfriend->id}}"> {{ $listfriend->name }}</span>
                            </div>
                        </div>
                    </li>
                    @endif
                @endforeach
            @endif
               
            
        </ul>   
    </div>

    <!--  END LEFT MENU MESSENGER -->