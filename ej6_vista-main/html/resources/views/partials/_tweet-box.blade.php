@auth()
    <form action="{{ route('save-post') }}" method="post">
        @csrf
        <div class="flex">
            <div class="m-2 w-10 py-1">
                <img class="inline-block h-10 w-10 rounded-full" src="https://picsum.photos/400" alt="" />
            </div>

            <div class="flex-1 px-2 pt-2 mt-2">
                <textarea name="publicacion" class="bg-transparent focus:outline-none font-medium text-gray-400 text-lg w-full" rows="2" cols="50"
                    placeholder="Qué Snippets quieres compartir"></textarea>
            </div>
            <div>
                <select name="lenguaje" class="form-control bg-blue-200">
                    <option value="no_seleccionado">Lenguaje del Snippets</option>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="C++">C++</option>
                    <option value="C#">C#</option>
                    <option value="Ruby">Ruby</option>
                    <option value="Swift">Swift</option>
                    <option value="Go">Go</option>
                    <option value="TypeScript">TypeScript</option>
                </select>

            </div>

        </div>



        <div class="flex">
            <div class="w-10"></div>



            <div class="flex-1 mb-3">
                <button type ="submit"
                    class="bg-blue-400 mt-5 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-full mr-8 float-right">
                    Publicar Snippet
                </button>
            </div>
        </div>

    </form>
@endauth
