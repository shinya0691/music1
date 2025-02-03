<x-app-layout>
        <h1>Blog Name</h1>
        <a href='/music/create'>create</a>

        <div class='music'>
            @foreach ($genres as $genre)
                <div class='genre'>
                   
                    <p class='text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'>{{ $genre->name }}</p>
                </div>
            @endforeach


            @foreach ($music_items as $music)
                <div class='music max-w-sm rounded overflow-hidden shadow-lg'>
                    <div class="px-6 py-4">
                        <a href="music/{{ $music->id }}"> 
                            <p class='font-bold text-xl mb-2'>{{ $music->name }}</p>
                        </a>
                        <p class='text-gray-700 text-base'>{{ $music->artist }}</p>
                        <p class='inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2'>{{ $music->genre->name }}</p>
                    </div>
                </div>
            @endforeach
            
           

            
            <script>
                function deletePost(id) 
                {
                    'use strict'
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) 
                        {
                            document.getElementById(`form_${id}`).submit();
                        }
                }
            </script>
        </div>
</x-app-layout>