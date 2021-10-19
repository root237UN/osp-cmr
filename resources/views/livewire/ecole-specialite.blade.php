<div>
    <div class="flex-row">
        <div class="box-actions  row mx-0">
            <!-- Button trigger modal -->

            <div class="response">
                @if(session()->has('message'))
                <div class="alert p-2 alert-success">{{session('message')}}</div>
                @endif
            </div>

            <div class="card p-0 card-action">
                <div class="card-header p-0">
                    <p><i class="fas fa-project-diagram"></i>
                        <span>Ecole - Specialité</span>
                    </p>
                </div>
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Ecole : </label>
                                    <div wire:ignore>
                                        <select style="font-size: 11px !important;" id="ecole-dropdown" class="form-control">
                                            @foreach($listEcole as $ecole)
                                            <option value="{{$ecole}}">{{ $ecole->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mb-2 filiere-cycle1">
                                <div wire:ignore class="form-group">
                                    <label>Filière du premier cycle : </label>
                                    {{$ecole}}
                                    <?php var_dump($listFiliere1 ) ?>
                                    <div>
                                        <select style="font-size: 11px !important;" multiple="multiple" id="cycle1-dropdown" class="form-control select-cycle" wire:model="filieresCyle1">
                                            @foreach($listFiliere1 as $filiere)
                                            <option value="{{$filiere->id}}">{{ $filiere->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mb-2 filiere-cycle2">
                                <div class="form-group">
                                    <label>Filière du second cycle : </label>
                                    <div>
                                        <select style="font-size: 11px !important;" id="cycle2-dropdown" multiple="multiple" class="form-control select-cycle" wire:model="filieresCycle2">
                                            @foreach($listFiliere2 as $filiere)
                                            <option value="{{$filiere->id}}">{{ $filiere->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $('.select-cycle').select2({
            width: 'resolve', // need to override the changed default
            theme: "bootstrap-5",
        });

        $(".js-example-responsive").select2({
            width: 'resolve', // need to override the changed default
            theme: "bootstrap-5",
        });

        $("#ecole-dropdown").select2({
            theme: "bootstrap-5",
        }).on('change', function(e) {
            let data = JSON.parse($(this).val());
            console.log(data);
            @this.set('ecole', data);

            if(data.cycle_1 == 1 && data.cycle_2 == 0 ){
                $(".filiere-cycle1").removeClass('visible');
                $(".filiere-cycle2").removeClass('visible');
                $(".filiere-cycle1").addClass('visible');
            }
            if(data.cycle_2 == 1 && data.cycle_1 == 0){
                $(".filiere-cycle1").removeClass('visible');
                $(".filiere-cycle2").removeClass('visible');
                $(".filiere-cycle2").addClass('visible');
            }
            if(data.cycle_2 == 1 && data.cycle_1 == 1)
            {
                $(".filiere-cycle1").addClass('visible');
                $(".filiere-cycle2").addClass('visible');

            }
        });
    </script>
    @endpush
