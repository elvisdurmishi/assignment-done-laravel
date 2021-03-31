@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full lg:w-8/12">
            <div class="p-6 flex items-center justify-between">
                <h1 class="text-2xl font-medium">Classes</h1>
                <button id="create-btn" class="hidden lg:block w-3/12 bg-blue-500 rounded-lg p-4 font-medium text-white mb-4">Create</button>
            </div>
            <div class="relative bg-white p-6 rounded-lg ">
                <button id="create-mobile-btn" class="lg:hidden shadow-lg z-10 bg-blue-500 w-16 h-16 rounded-full fixed bottom-5 right-5 outline-none">
                    <i id="icon" class="fas text-white fa-2x fa-plus"></i>
                </button>
                <form id="class-form" class="hidden" action="{{route('classes')}}" method="post">
                    @csrf
                    <div class="mb-4 lg:px-80">
                        <label for="name" class="sr-only">Class Name</label>
                        <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4
                        @error('name') border-red-500 @enderror" name="title" id="title" placeholder="Class Name">

                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="section" class="sr-only">Class Section</label>
                        <input type="section" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4
                        @error('section') border-red-500 @enderror" name="section" id="title" placeholder="Class Section (Semester)">

                        @error('section')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="subject" class="sr-only">Class Subject</label>
                        <input type="subject" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4
                        @error('subject') border-red-500 @enderror" name="section" id="title" placeholder="Class Subject">

                        @error('subject')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <button class="bg-blue-500 text-white font-medium w-full rounded text-center mb-4 px-5 py-3" type="submit">Create</button>
                    </div>
                </form>
                <div class="classes" id="classes">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni incidunt, adipisci cumque nisi similique non voluptatibus corporis neque dolorem officia, quasi asperiores. Deserunt, placeat aliquid. Neque cumque voluptatum et qui sed voluptates quod, consectetur est reprehenderit vero itaque ipsum magnam iure. Ex architecto nemo blanditiis nobis dolorum? Aliquid ab illum, vitae ducimus, molestias voluptatibus officiis porro provident iusto enim laudantium saepe nulla voluptates labore repellat dolores consequuntur sed molestiae ipsam earum id quas dignissimos? Dicta nesciunt magnam, modi quisquam similique quos, debitis vero ut fugit id assumenda veniam deleniti voluptate ipsam placeat laboriosam, in architecto odio ullam fugiat eius facilis perspiciatis? Quasi ipsa sapiente adipisci laudantium iusto neque porro repellat asperiores harum rerum? Odit molestiae tempora modi impedit et voluptas laudantium accusantium doloremque repellat unde eaque tenetur optio omnis eos dicta obcaecati provident distinctio exercitationem, voluptates, fugit dolorem amet dignissimos culpa officia. Optio, voluptatem molestias mollitia alias commodi tempora repudiandae. Recusandae officiis excepturi delectus ipsum quaerat labore nemo necessitatibus enim, explicabo ducimus blanditiis non odit modi tempora. Aliquam ut tenetur sunt est, id doloribus consequatur recusandae odit corporis repellendus impedit magnam error. Explicabo omnis eum expedita quo, commodi voluptatibus quae id soluta molestiae harum odit. Officiis nobis rerum nisi repellendus libero voluptas enim veritatis perferendis placeat possimus architecto quaerat mollitia vitae, qui magnam delectus. Ducimus mollitia sapiente aliquam corrupti doloremque minima praesentium architecto magnam illum totam harum dicta, molestiae voluptate culpa molestias atque, placeat, veritatis quidem facilis. Sapiente harum neque omnis fugit blanditiis reprehenderit adipisci! Error assumenda aperiam minima praesentium!</p>
                </div>
            </div>
        </div>
    </div>
@endsection