@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full lg:w-8/12">
            <div class="p-6 flex items-center justify-between">
                <h1 class="text-2xl font-medium">Assignments</h1>
                <button id="create-btn" class="hidden lg:block w-3/12 bg-blue-500 rounded-lg p-4 font-medium text-white mb-4">Create Assignment</button>
            </div>
            <div class="relative bg-white p-6 rounded-lg">
                <button id="assignment-btn" class="lg:hidden z-10 bg-blue-500 w-16 h-16 rounded-full fixed bottom-5 right-5 outline-none">
                    <i id="icon" class="fas text-white fa-2x fa-feather-alt"></i>
                </button>
                <form id="assignment-form" class="hidden" action="{{route('assignments')}}" method="post">
                    <div class="mb-4">
                        <label for="title" class="sr-only">Title</label>
                        <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4
                        @error('title') border-red-500 @enderror" name="title" id="title" placeholder="Title">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100
                        border-2 w-full p-4 rounded-lg resize-none mb-4 @error('body') border-red-500 @enderror"
                        placeholder="Directions"></textarea>
                        <label for="file-upload" class="custom-file-upload bg-blue-500 text-white px-4 py-3 rounded 
                        font-medium w-full text-center mb-4">
                            <i class="fas fa-paperclip"></i> Attach a File
                        </label>
                        <input id="file-upload" type="file"/>
                        <div class="mb-4 flex flex-col">
                            <label for="points" class="sr-only">Points</label>
                            <input class="border-2 p-4 rounded-lg mb-4" type="number" name="points" id="points" placeholder="Points">

                            <label for="date" class="sr-only">Date</label>
                            <input class="border-2 p-5 rounded-lg mb-4 textbox-n" placeholder="Due Date" type="text" onfocus="(this.type='date')" type="date" name="date" id="date" min="<?php echo date("Y-m-d"); ?>">

                        </div>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </form>
                <div class="assignments" id="assignments">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni incidunt, adipisci cumque nisi similique non voluptatibus corporis neque dolorem officia, quasi asperiores. Deserunt, placeat aliquid. Neque cumque voluptatum et qui sed voluptates quod, consectetur est reprehenderit vero itaque ipsum magnam iure. Ex architecto nemo blanditiis nobis dolorum? Aliquid ab illum, vitae ducimus, molestias voluptatibus officiis porro provident iusto enim laudantium saepe nulla voluptates labore repellat dolores consequuntur sed molestiae ipsam earum id quas dignissimos? Dicta nesciunt magnam, modi quisquam similique quos, debitis vero ut fugit id assumenda veniam deleniti voluptate ipsam placeat laboriosam, in architecto odio ullam fugiat eius facilis perspiciatis? Quasi ipsa sapiente adipisci laudantium iusto neque porro repellat asperiores harum rerum? Odit molestiae tempora modi impedit et voluptas laudantium accusantium doloremque repellat unde eaque tenetur optio omnis eos dicta obcaecati provident distinctio exercitationem, voluptates, fugit dolorem amet dignissimos culpa officia. Optio, voluptatem molestias mollitia alias commodi tempora repudiandae. Recusandae officiis excepturi delectus ipsum quaerat labore nemo necessitatibus enim, explicabo ducimus blanditiis non odit modi tempora. Aliquam ut tenetur sunt est, id doloribus consequatur recusandae odit corporis repellendus impedit magnam error. Explicabo omnis eum expedita quo, commodi voluptatibus quae id soluta molestiae harum odit. Officiis nobis rerum nisi repellendus libero voluptas enim veritatis perferendis placeat possimus architecto quaerat mollitia vitae, qui magnam delectus. Ducimus mollitia sapiente aliquam corrupti doloremque minima praesentium architecto magnam illum totam harum dicta, molestiae voluptate culpa molestias atque, placeat, veritatis quidem facilis. Sapiente harum neque omnis fugit blanditiis reprehenderit adipisci! Error assumenda aperiam minima praesentium!</p>
                </div>
            </div>
        </div>
    </div>
@endsection