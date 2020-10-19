@extends('layouts.app')

@section('content')
            <div class="border-b border-t border-gray-200 sm:border sm:rounded-lg overflow-hidden shadow mb-6">
                <div class="bg-white p-2 border-b border-gray-200">
                    <div class="-mt-4 flex md:flex-row flex-col md:justify-between md:flex-no-wrap">
                        <div class="flex flex-fill flex-grow md:flex-grow-0 mt-4 mr-5 flex-shrink-1 flex-initial whitespace-no-wrap overflow-x-hidden items-center">
                            <h3 class="text-lg leading-6 px-2 py-4 font-medium text-gray-900">
                                <span>American Fords</span>
                                <span class="hidden md:block text-gray-500 text-sm flex justify-start">
                                    <i class="far fa-redo-alt md:mt-1 md:h-5 w-5"></i>Daily
                                </span>
                            </h3>
                        </div>
                        <div class="flex justify-between">
                            <span class="md:hidden -mt-1 pl-2 text-gray-500 text-sm flex justify-start">
                                <i class="far fa-redo-alt md:mt-1 md:h-5 w-5"></i>Daily
                            </span>
                            <div class="flex justify-end md:mt-6 md:flex-shrink-0">
                        <span class=" inline-flex rounded">
            <a
                href="#"
                class="hover:no-underline"
            >

        <button class="candc-button candc-button-delete">
                            <i class="far fa-trash candc-button-icon md:-ml-1 md:mr-1 md:mt-1 md:h-5 w-5"></i>
                        <span class="hidden  candc-button-message md:block">
                Delete
            </span>

                            <span class="hidden"><i class="candc-button-confirm-icon far fa-check md:-ml-1 md:mr-1 md:mt-1 md:h-5 w-5"></i></span>
                <span class="hidden candc-button-confirm-message">
                    <span class="hidden md:inline-block">Are you sure?</span>
                </span>

        </button>
        </a>
    </span>


                                <span class="ml-2 inline-flex rounded">
            <a
                href="#"
                target="_blank"
                class="hover:no-underline"
            >

        <button type="" class="candc-button candc-button-default">
                            <i class="fas fa-search candc-button-icon md:-ml-1 md:mr-1 md:mt-1 md:h-5 w-5"></i>
                        <span class="hidden  candc-button-message md:block">
                View
            </span>


        </button>
        </a>
    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row p-3 text-black account-item-container">
                    <div class="w-full pt-2">
                        <div class="saved-search-item mx-3"><span class="saved-search-key">Make</span> Ford</div>
                        <div class="saved-search-item mx-3"><span class="saved-search-key">Country</span> UK</div>
                        <div class="saved-search-item mx-3"><span class="saved-search-key">Category</span> American Cars</div>
                    </div>
                </div>
            </div>
@endsection
