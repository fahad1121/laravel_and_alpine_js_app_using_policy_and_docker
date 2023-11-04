@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5 ">
                <div class="col-md-8">
                    <div class="card">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">Weekly Tasks</span>
                            <div class="d-flex flex-row">
                                <button class="btn btn-primary mr-2 active">Active</button>
                                <button class="btn btn-primary new"><i class="fa fa-plus"></i> New</button>
                            </div>
                        </div>
                        <div class="mt-3 inputs">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control " placeholder="Search Tasks...">
                        </div>

                        <div x-data="{
                                    tasks: {{$tasks}}
                                }">
                            <template x-for="task in tasks" :key="task.id">
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row align-items-center">
                                            <span class="star"><i class="fa fa-star yellow"></i></span>
                                            <div class="d-flex flex-column">
                                                <span x-text="task.title"></span>
                                                <div class="d-flex flex-row align-items-center time-text">
                                                    <small x-text="task.description"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="content-text-1" x-text="task.user.name.charAt(0)"></span>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
