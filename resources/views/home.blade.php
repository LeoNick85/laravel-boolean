@extends('layouts.app')

@section('content')
    <section id="jumbo-home">
        <div class="container">
            <div id="jumbo-left">
                <h1>Diventa <strong>sviluppatore web</strong></h1>
                <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
                <ul>
                    <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
                    <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                    <li>Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                </ul>
            </div>
            <img src=" {{ asset('img/pc-black.gif')}}" alt="Lezione online">
        </div>
    </section>
    <section id="employment-stats" class="bg-blue">
        <div class="container">
            <div class="stats-box">
                <p>98%</p>
                <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
            </div>
            <div class="stats-box">
                <p>€ 23.000</p>
                <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
            </div>
            <div class="stats-box">
                <p>#1</p>
                <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
            </div>
        </div>
    </section>
    <section id="employment-partners">
        <div class="container clearfix">
            <p>I nostri studenti sono stati assunti da:</p>
            <div class="float-left">
                <img src=" {{ asset('img/facileit.png')}}" alt="Facile.it logo">
                <img src=" {{ asset('img/oneday.png')}}" alt="One day logo">
                <img src=" {{ asset('img/prima.png')}}" alt="Prima logo">
            </div>
            <div class="float-right">
                <img src=" {{ asset('img/fabbrica-digitale-big.png')}}" alt="Facile.it logo">
                <img src=" {{ asset('img/nephila.png')}}" alt="One day logo">
                <img src=" {{ asset('img/rds.png')}}" alt="Prima logo">
            </div>
        </div>
    </section>
@endsection

@section("page-title", "Homepage")
