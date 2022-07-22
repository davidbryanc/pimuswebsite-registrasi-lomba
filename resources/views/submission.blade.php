@extends('layout.mainweb')

@section('title')
    PIMUS 11 - Submission
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')
    <div class="table-container" style="margin-top: 150px; margin-bottom: 50px;" >
        <h1 class="heading">Submission</h1>
        <table class="table-submit">
            <thead>
                <tr>
                    <th>Competition Name</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Competition Name">Poster</td>
                    <td data-label="Deadline">23 Oktober 2021</td>
                    <td data-label="Status"><span class="text_open text-danger">NOT Submitted</span></td>
                    <td data-label="Submit" class="tdButton"><button class="btnSubmit" data-bs-toggle="modal"
                            data-bs-target="#formGDriveSubmission">Submit</button></td>
                </tr>
                <tr>
                    <td data-label="Competition Name">Poster</td>
                    <td data-label="Deadline">23 Oktober 2021</td>
                    <td data-label="Status"><span class="text_open text-success">Submitted</span></td>
                    <td data-label="Submit" class="tdButton"><button class="btnSubmit" data-bs-toggle="modal"
                            data-bs-target="#formGDriveSubmission" disabled>Submit</button></td>
                </tr>
                <tr>
                    <td data-label="Competition Name">Poster</td>
                    <td data-label="Deadline">23 Oktober 2021</td>
                    <td data-label="Status"><span class="text_open text-danger">NOT Submitted</span></td>
                    <td data-label="Submit" class="tdButton"><button class="btnSubmit" data-bs-toggle="modal"
                            data-bs-target="#formGDriveSubmission">Submit</button></td>
                </tr>
                <tr>
                    <td data-label="Competition Name">Poster</td>
                    <td data-label="Deadline">23 Oktober 2021</td>
                    <td data-label="Status"><span class="text_open text-danger">NOT Submitted</span></td>
                    <td data-label="Submit" class="tdButton"><button class="btnSubmit" data-bs-toggle="modal"
                            data-bs-target="#formGDriveSubmission">Submit</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="formGDriveSubmission" tabindex="-1" aria-labelledby="formGDriveSubmissionLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #ebb010;">
                    <h5 class="modal-title text-white" id="formGDriveSubmissionLabel">Poster</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form>
                            <div class="row justify-content-center mb-2">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="LinkGoogleDrive" class="form-label">Google Drive Link</label>
                                        <input type="text" class="form-control" id="linkDrive" name="linkDrive"
                                            placeholder="Input Google Drive Link">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"></div>
                                <div class="col">
                                    <button type="submit" class="btnSubmit" name="btnSubmit" value="submit">Submit</button>
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection
