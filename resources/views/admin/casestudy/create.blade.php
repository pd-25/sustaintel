@extends('admin.layout.main')
@section('title', 'Create Casestudy | ')
@section('content')
    <style>
        .mt-9 {
            margin-top: 163px;
        }
    </style>
    <section class="section dashboard">
        <div class="row">
            <form action="{{ route('case-studies.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Case Study</h5>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" required cols="30" rows="10"></textarea>
                                    @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" required>
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="c-section" class="row">
                    <div class="section-item col-md-6">
                        <h4>Section 1</h4>
                        <div class="mt-2">
                            <label for="inputEmail" class="col-form-label">Title</label>
                            <input type="text" name="section[0][title]" class="form-control" required placeholder="Title">
                            @error('title')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="inputEmail" class="col-form-label">Description</label>
                            <textarea name="section[0][description]" class="form-control" required cols="30" rows="10" placeholder="Description"></textarea>
                            @error('description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeSection(this)">Remove Section</button> --}}
                    </div>
                    <div class="col-md-6" id="add-btn">
                        <div class="mt-9 text-center">
                            <button class="btn btn-sm btn-primary" type="button" onclick="addNewFld()">Add Section</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save Case Study</button>
                        <a href="{{ route('case-studies.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var sectionCount = 1;

        function addNewFld() {
            sectionCount++;
            const sectionHtml = `
                <div class="section-item col-md-6">
                    <h4>Section ${sectionCount}</h4>
                    <div class="mt-2">
                        <label for="inputEmail" class="col-form-label">Title</label>
                        <input type="text" name="section[${sectionCount - 1}][title]" class="form-control" required placeholder="Title">
                        @error('title')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="inputEmail" class="col-form-label">Description</label>
                        <textarea name="section[${sectionCount - 1}][description]" class="form-control" required cols="30" rows="10" placeholder="Description"></textarea>
                        @error('description')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeSection(this)">Remove Section</button>
                </div>
            `;

            const addBtnHtml = `
                <div class="col-md-6" id="add-btn">
                    <div class="mt-9 text-center">
                        <button class="btn btn-sm btn-primary" type="button" onclick="addNewFld()">Add Section</button>
                    </div>
                </div>
            `;

            // Remove the current add button
            document.getElementById('add-btn').remove();

            // Append the new section and the add button
            document.getElementById('c-section').insertAdjacentHTML('beforeend', sectionHtml);
            document.getElementById('c-section').insertAdjacentHTML('beforeend', addBtnHtml);
        }

        function removeSection(element) {
            element.closest('.section-item').remove();
        }
    </script>
@endsection
