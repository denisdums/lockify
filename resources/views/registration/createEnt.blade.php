@extends('layouts.app')

@section('content')

    <form class="register" method="POST" action="{{ url('/registerEnt') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="part_one">


        <input id="entreprisename" type="text" class="form-input" name="entreprisename" value="{{ old('entreprisename') }}" placeholder="Nom de l'entreprise">
        @if ($errors->has('entreprisename'))
            <span class="error">
                          <strong>{{ $errors->first('entreprisename') }}</strong>
                      </span>
        @endif

            <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" placeholder="Mail">
            @if ($errors->has('email'))
                <span class="error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
            @endif

            <input id="phone" class="form-input input-element" name="phone" value="{{ old('phone') }}" placeholder="Numéro de téléphone">
            @if ($errors->has('phone'))
                <span class="error">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
            @endif

            <select name="categorie" class="form-input">
                <option value="boucher">Boucher</option>
                <option value="coiffeur">Coiffeur</option>
                <option value="garage">Garage</option>
                <option value="opticien">Opticien</option>
                <option value="boucher">Boucher</option>
            </select>

        <input id="description" type="text" class="form-input" name="description" value="{{ old('description') }}" placeholder="Description">
        @if ($errors->has('description'))
            <span class="error">
                         <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif

            <div class="btn_box">
                <span class="btn purple" id="register_first_next">Suivant</span>
                <a href="/register" class="btn linealpurple">Précédent</a>
            </div>
        </div>

        <div class="form-group part_two">
            <input type="text" class="form-control form-input" id="form-address" placeholder="Adresse" name="adresse" value="{{ old('adresse') }}"/>
            @if ($errors->has('adresse'))
                <span class="error">
                          <strong>{{ $errors->first('adresse') }}</strong>
                      </span>
            @endif


            <input type="text" class="form-control form-input" id="form-city" placeholder="Ville" name="ville" value="{{ old('ville') }}"/>
            @if ($errors->has('ville'))
                <span class="error">
                          <strong>{{ $errors->first('ville') }}</strong>
                      </span>
            @endif

            <input type="text" class="form-control form-input" id="form-country" placeholder="Pays" name="pays" value="{{ old('pays') }}"/>
            @if ($errors->has('pays'))
                <span class="error">
                          <strong>{{ $errors->first('pays') }}</strong>
                      </span>
            @endif

            <input type="number" class="form-control form-input" id="maxclient" placeholder="Nombre max. de client" name="maxclient" value="{{ old('maxclient') }}"/>
            @if ($errors->has('maxclient'))
                <span class="error">
                          <strong>{{ $errors->first('maxclient') }}</strong>
                      </span>
            @endif

            <select name="creneau" class="form-input">
                <option disabled selected hidden>Créneau</option>
                <option value="5">5 min</option>
                <option value="15">15 min</option>
                <option value="20">20 min</option>
                <option value="30">30 min</option>
                <option value="45">45 min</option>
                <option value="60">1 h</option>

            </select>


            <input type="file" name="avatar" id="avatar" id="coverchanson" class="input-file2" accept="image/*">
            <div class="btn_box">
                <label for="avatar" class="btn purple">PHOTO</label>
                <span class="btn purple" id="register_second_next">Suivant</span>
                <span  class="btn linealpurple" id="register_first_previous">Précédent</span>
            </div>


        </div>



            <div class="form-group form-flex part_three">
                <div class="jour_form">
                    <img src="/assets/images/fond.png" alt="image de fond">
                    <span class="jour_text">Lundi</span>
                </div>

                <div class="open_button_reel">
                    <div class="button r" id="button-3">
                        <input type="checkbox" name="open_monday" class="checkbox" id="monday_button">
                        <div class="knobs"></div>
                        <div class="layer"></div>
                    </div>

                    OUVERT
                </div>


                <div class="horaire_form" id="horaire_monday">
                    <div>
                        <div class="open_button">
                            <div class="button r" id="button-3">
                                <input type="checkbox" name="monday_morn" class="checkbox horaire_monday"id="monday_morn">
                                <div class="knobs"></div>
                                <div class="layer"></div>
                            </div>

                            Matin
                        </div>
                        <div class="ligne_form">De <input type="time" name="monday_morn_start" class="horaire_monday morn"> à  <input class="horaire_monday morn" type="time" name="monday_morn_end"></div>
                    </div>
                    <div>
                        <div class="open_button">
                            <div class="button r" id="button-3">
                                <input type="checkbox" name="monday_after" class="checkbox horaire_monday" id="monday_after">
                                <div class="knobs"></div>
                                <div class="layer"></div>
                            </div>

                            Après-midi
                        </div>
                        <div class="ligne_form">De <input type="time" name="monday_after_start" class="horaire_monday after"> à  <input type="time" name="monday_after_end" class="horaire_monday after"></div>
                    </div>
                </div>

                <div class="btn_box">

                    <span class="btn purple" id="register_third_next">Suivant</span>
                    <span  class="btn linealpurple" id="register_second_previous">Précédent</span>
                </div>
            </div>

        <div class="form-group part_four">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Mardi</span>
            </div>

            <div class="open_button_reel" id="horaire_tuesday">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_tuesday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="tuesday_morn" class="checkbox" id="tuesday_morn">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="tuesday_morn_start" class="horaire_tuesday morn"> à  <input type="time" name="tuesday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="tuesday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="tuesday_after_start"> à  <input type="time" name="tuesday_after_start"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_fourth_next">Suivant</span>
                <span  class="btn linealpurple" id="register_third_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_five">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Mercredi</span>
            </div>

            <div class="open_button_reel">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_wednesday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="wednesday_morn" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="wednesday_morn_start"> à  <input type="time" name="wednesday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="wednesday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="wednesday_after_start"> à  <input type="time" name="wednesday_after_end"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_five_next">Suivant</span>
                <span  class="btn linealpurple" id="register_fourth_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_six">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Jeudi</span>
            </div>

            <div class="open_button_reel">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_thursday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="thursday_morn" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="thursday_morn_start"> à  <input type="time" name="thursday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="thursday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="thursday_after_start"> à  <input type="time" name="thursday_after_end"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_six_next">Suivant</span>
                <span  class="btn linealpurple" id="register_five_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_seven">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Vendredi</span>
            </div>

            <div class="open_button_reel">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_friday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="friday_morn" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="friday_morn_start"> à  <input type="time" name="friday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="friday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="friday_after_start"> à  <input type="time" name="friday_after_end"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_seven_next">Suivant</span>
                <span  class="btn linealpurple" id="register_six_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_eight">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Samedi</span>
            </div>

            <div class="open_button_reel">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_saturday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="saturday_morn" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="saturday_morn_start"> à  <input type="time" name="saturday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="saturday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="saturday_after_start"> à  <input type="time" name="saturday_after_end"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_eight_next">Suivant</span>
                <span  class="btn linealpurple" id="register_seven_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_nine">
            <div class="jour_form">
                <img src="/assets/images/fond.png" alt="image de fond">
                <span class="jour_text">Dimanche</span>
            </div>

            <div class="open_button_reel">
                <div class="button r" id="button-3">
                    <input type="checkbox" name="open_sunday" class="checkbox">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>

                OUVERT
            </div>


            <div class="horaire_form">
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="sunday_morn" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Matin
                    </div>
                    <div class="ligne_form">De <input type="time" name="sunday_morn_start"> à  <input type="time" name="sunday_morn_end"></div>
                </div>
                <div>
                    <div class="open_button">
                        <div class="button r" id="button-3">
                            <input type="checkbox" name="sunday_after" class="checkbox">
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>

                        Après-midi
                    </div>
                    <div class="ligne_form">De <input type="time" name="sunday_after_start"> à  <input type="time" name="sunday_after_end"></div>
                </div>
            </div>

            <div class="btn_box">

                <span class="btn purple" id="register_nine_next">Suivant</span>
                <span  class="btn linealpurple" id="register_eight_previous">Précédent</span>
            </div>
        </div>

        <div class="form-group part_ten">
            <input id="password" type="password" class="form-input" name="password" value="{{ old('password') }}" placeholder="Mot de passe">
            @if ($errors->has('password'))
                <span class="error">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
            @endif

            <input id="password_confirmation" type="password" class="form-input" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmer le mot de passe">
            @if ($errors->has('password_confirmation'))
                <span class="error">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
            @endif

            <div class="btn_box">

                <button type="submit" class="btn purple">S'inscrire</button>
                <span id="register_nine_previous" class="btn linealpurple">Précédent</span>
            </div>
        </div>





    </form>
<!--
    <div class="btn_box">

        <button type="submit" class="btn purple">Suivant</button>
        <a href="/" class="btn linealpurple">Précédent</a>
    </div> -->
@endsection

<div class="timeline">
    <div class="timeline_content timeline_entrepreneur"></div>
</div>
