@extends('layouts.admin')
@section('content')

<div>
    <h1>Liste des Utilisateurs</h1> 
</div>




<!-- component -->
<div
								class="container mb-2 flex mx-auto w-full items-center justify-center"
							>
								<ul class="flex flex-col p-4">
									<li class="border-gray-400 flex flex-row">
										<div
											class="select-none flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 hover:shadow-2xl border-red-400"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">
													Product-Based Service Based or Hybrid?
												</div>
											</div>
											<div
												class="w-1/4 text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												B2C
											</div>
										</div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div
											class="select-none rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 mt-3 border-red-400 hover:shadow-2xl"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">
													Target audience of startup
												</div>
											</div>
											<div
												class="w-1/4 text-wrap text-center text-white text-bold flex flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												Adult
											</div>
										</div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div
											class="select-none rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 mt-3 border-red-400 hover:shadow-2xl"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">Domain of the startup</div>
											</div>
											<div
												class="flex w-1/4 text-wrap text-center flex-col text-white text-bold rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												Health and Foodtech
											</div>
										</div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div
											class="select-none rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 mt-3 border-red-400 hover:shadow-2xl"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">
													Rounds of fundraising taken
												</div>
											</div>
											<div
												class="w-1/4 text-wrap text-center flex flex-col text-white text-bold rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												Series B
											</div>
										</div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div
											class="select-none rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 mt-3 border-red-400 hover:shadow-2xl"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">Funds Raised</div>
											</div>
											<div
												class="w-1/4 text-wrap text-center flex flex-col text-white text-bold rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												69
											</div>
										</div>
									</li>
									<li class="border-gray-400 flex flex-row mb-2">
										<div
											class="select-none rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 mt-3 border-red-400 hover:shadow-2xl"
										>
											<div class="flex-1 pl-1 mr-16">
												<div class="font-medium">Recruiment Status</div>
											</div>
											<div
												class="w-1/4 text-wrap text-center flex flex-col text-white text-bold rounded-md bg-red-500 justify-center items-center mr-10 p-2"
											>
												Open
											</div>
										</div>
									</li>
								</ul>
							</div>







@endsection
