@extends('layouts.admin')
@section('content')

<div class="p-5">

<!-- header -->
<div class="flex flex-col mb-10">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-white">
            <thead class="bg-gray-50">
            </thead>
            <tbody class="bg-indigo-700">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-16 w-16">
                      <img class="h-16 w-16 rounded-full border" src="{{ Auth()->user()->photo }}" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-1xl text-white font-light leading-normal">
                        Hello,<br>{{Auth()->user()->name}}!
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-white text-4xl font-thin">
                    Liste des utilisateurs
                <div class="text-sm inline-block leading-normal"> <strong></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-left text-sm text-white font-bold leading-normal">
                Events Today
                <ul class="font-thin text-xs py-2">
                <li>12:00 Title of Event</li>
                <li>12:50 Title of Event</li>
                <li>12:30 Title of Event</li>
                </ul>
                </td>
              </tr>
  
              <!-- More rows... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


    <div>
        @forelse($users as $user) 
            <!-- component -->
            <div class="container mb-2 flex mx-auto w-full items-center justify-center">
	            <ul class="flex flex-col p-4">
		            <li class="border-gray-400 flex flex-row">
			            <div class="select-none flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 hover:shadow-2xl border-red-400">
				            <div class="flex-1 pl-1 mr-16">
                                <div class="flex-shrink-0 h-16 w-16">
                                    <img class="h-8 w-8 rounded-full border" src="{{ Auth()->user()->photo }}" alt="">
                                  </div>
					            <div class="font-medium">
						            Product-Based Service Based or Hybrid?
					            </div>
				            </div>
				            <div class="w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2">
					            B2C
				            </div>
			            </div>
		            </li>							
	            </ul>
            </div>
        @empty
            <p>
                Il n'y a pas d'utilisateur
            </p>
        @endforelse

        <div>
            {{ $users->links() }}
        </div>

    </div>                      
</div>

@endsection
