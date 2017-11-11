


                  {{--Links form --}}
                 <form class="form-horizontal" method="POST" action="{{ route('save') }}">

                      {{ csrf_field() }}

                        {{--Links form Description--}}
                  <div class="form-group{{ $errors->has('link_desc') ? ' has-error' : 'link_desc' }}">
                      <label for="link_desc" class="col-md-4 control-label">Add description for link</label>

                      <div class="col-md-6">
                          <input id="link_desc" type="text" class="form-control" name="link_desc" required>

                          @if ($errors->has('link_desc'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('link_desc') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  {{--Links form Add link Address--}}
            <div class="form-group{{ $errors->has('link_addr') ? ' has-error' : 'link_addr' }}">
                <label for="link_addr" class="col-md-4 control-label">Add link</label>

                <div class="col-md-6">
                    <input id="link_addr" type="text" class="form-control" name="link_addr" required>

                    @if ($errors->has('link_addr'))
                        <span class="help-block">
                            <strong>{{ $errors->first('link_addr') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

               {{--Links form Add button --}}
                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                          <button id="link_submit" type="submit" class="btn btn-primary">
                            Add Link
                          </button>
                        </div>
