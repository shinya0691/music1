<x-app-layout>
    <x-slot name="header">
    
    </x-slot>
    <h1>Blog Name</h1>
        <div class='posts'>
            
        </div>


        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>
