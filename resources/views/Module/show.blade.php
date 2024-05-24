<style>
    p{
        font-size: 0.9rem;
    }
    h1{
        color: rgb(38, 78, 14)
    }
</style>
<x-master title="Module Details">
    <div class="container vh-100">
        <div class="header d-flex justify-content-between mt-3">
            <img src="{{ asset('images/Logo_ofppt.png') }}" width="8%" alt="Logo OFPPT">
            <div class="mt-2">
                <strong style="font-size: 0.9rem">Direction Régionale</strong>
                <p class=" text-center"><strong style="font-size: 0.9rem">Marrakech-Safi</strong></p>
            </div>
        </div>
        
        <h1 style="font-size: 1.9rem"  class="my-2 mb-5 text-center" >Procès Verbal de Fin de Module</h1>
 
        <div>
            <p><strong>Etablissement :</strong> INSTITUT SPECIALISE DE TECHNOLOGIE APPLIQUEE NTIC SAFI</p>
        </div>
        <div class="info-section d-flex justify-content-between">
            
            <div class="left-info">
                
                <p><strong>Filière :</strong> {{$groupe->specialite}}</p>
                <p><strong>Groupe de formation :</strong> {{$groupe->codeG}} ({{$groupe->niveauF}} année)</p>
                <p><strong>Intitulé du module :</strong> {{$module->intitule}} ({{$module->codeM}})</p>
            </div>
            <div class="right-info">
                <p><strong>Année de formation :</strong> {{$groupe->annee_scolaire}}</p>
                <p><strong>Niveau :</strong> {{$groupe->niveau}}</p>
                <p><strong>Inscrits :</strong> {{$groupe->stagiaires->count()}}</p>
            </div>

        </div>
        <hr/>

        <h1 style="font-size: 1.9rem" class="text-center my-4" >Saisir les notes des stagiaires de groupe {{$groupe->codeG}}</h1>
        <a class="btn btn-success mb-4" href="{{route('create_evaluation',['groupe_id'=>$groupe,'module_id'=>$module])}}">Ajouter évaluaution</a>
        <table class="table ">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
            <tr>
                <td>CEF</td>
                <td>Nom</td>
                <td>Prénom</td>
            </tr>
            @foreach($groupe->stagiaires as $stagiaire)
                <tr>
                    <td>{{$stagiaire->cef}}</td>
                    <td>{{$stagiaire->nom}}</td>
                    <td>{{$stagiaire->prenom}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-master>
