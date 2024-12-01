<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            
            $solicitudes = Solicitud::all();

            return view('requerimientos.solicitudes.index', compact('solicitudes'));

        } catch (\Throwable $th) {
            
            echo $th->getMessage();

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request )
    {
        try {
            
            $solicitud = Solicitud::find( $request->id );

            if( $solicitud && $solicitud->id ){

                $mpdf = new \Mpdf\Mpdf([

                    'mode' => 'utf-8',
                    'format' => 'A4',
                    'orientation' => 'P',
                    'default_font' => 'dejavusans',
                    'default_font_size' => 32,
                    'shrink_tables_to_fit' => 0,
                    'autoScriptToLang' => false,
                    'autoLangToFont' => false,
    
                ]);

                $css = '
                    table, td{
                        font-size: 32px !important;
                    }

                    tr{
                        margin: 5px;
                    }
                ';

                $mpdf->debug = true;
                $mpdf->SetFont('dejavusans', '', 32);
                $mpdf->SetDefaultBodyCSS('font-size', '32px');

                $html = '
                <img src="' . base_path('public/img/logotipo-removebg-preview-min.png') . '" style="width: 50%; height: auto;">
                <table style="width: 100%; font-size: 32px;">
                    <tr>
                        <td colspan="2" style="font-size: 32px;"><b>Solicitud Se' . htmlspecialchars($solicitud->id, ENT_QUOTES, 'UTF-8') . '</b></td>
                        <td colspan="2" style="text-align: right; font-size: 32px;">' . htmlspecialchars($solicitud->created_at, ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="font-size: 32px;">Necesidad: <b>' . htmlspecialchars($solicitud->necesidad, ENT_QUOTES, 'UTF-8') . '</b></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 5px; border-top: 3px solid black; border-bottom: 3px solid black; text-align: center; font-size: 32px;">
                            <b>DATOS UNIDAD SERVICIO</b>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 32px;"><b>Nombre Analista</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->usuario->name ?? 'Sin analista', ENT_QUOTES, 'UTF-8') . '</td>
                        <td style="font-size: 32px;"><b>Código Plan</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->plan ?? 'Sin plan', ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td style="font-size: 32px;"><b>Nombre Cliente</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->cliente ?? 'Sin cliente', ENT_QUOTES, 'UTF-8') . '</td>
                        <td style="font-size: 32px;"><b>Rut</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->rut ?? 'Sin rut', ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td style="font-size: 32px;"><b>Correo electrónico</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->email ?? 'Sin email', ENT_QUOTES, 'UTF-8') . '</td>
                        <td style="font-size: 32px;"><b>Teléfono Contacto</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->telefono ?? 'Sin teléfono', ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td style="font-size: 32px;"><b>Domicilio</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->domicilio ?? 'Sin domicilio', ENT_QUOTES, 'UTF-8') . '</td>
                        <td style="font-size: 32px;"><b>Comuna, Ciudad</b></td>
                        <td style="font-size: 32px;">:' . htmlspecialchars($solicitud->ciudad ?? 'Sin ciudad', ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 5px; border-top: 3px solid black; border-bottom: 3px solid black; text-align: center;font-size: 32px;">
                            <b>RELATO DE LOS HECHOS</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 20px; text-align: center;font-size: 32px;">' . htmlspecialchars($solicitud->relato, ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 5px; border-top: 3px solid black; border-bottom: 3px solid black; text-align: center;font-size: 32px;">
                            <b>ANÁLISIS DE LA CONDICIÓN</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 20px; text-align: center;font-size: 32px;">' . htmlspecialchars($solicitud->analisis, ENT_QUOTES, 'UTF-8') . '</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 5px; border-top: 3px solid black; border-bottom: 3px solid black; text-align: center;font-size: 32px;">
                            <b>CONCLUSIÓN</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center; font-size: 32px;"><b>Nivel Falla</b></td>
                        <td style="text-align: center; font-size: 32px;"><b>Nivel Prioridad</b></td>
                        <td style="text-align: center; font-size: 32px;"><b>% Intervención</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;font-size: 32px; ">'.htmlspecialchars( $solicitud->falla, ENT_QUOTES, 'UTF-8').'</td>
                        <td style="text-align: center; font-size: 32px;">'.htmlspecialchars( $solicitud->prioridad, ENT_QUOTES, 'UTF-8').'</td>
                        <td style="text-align: center; font-size: 32px;">'.htmlspecialchars( $solicitud->intervencion, ENT_QUOTES, 'UTF-8').'</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center; font-size: 32px;"><b>Tipo Solicitud: </b>'.htmlspecialchars( $solicitud->tipo, ENT_QUOTES, 'UTF-8' ).'</td>
                        <td colspan="2" style="text-align: center; font-size: 32px;"><b>Derivación: </b>'.htmlspecialchars( $solicitud->derivacion, ENT_QUOTES, 'UTF-8' ).'</td>
                    </tr>
                </table>
                ';

                $mpdf->WriteHTML( $css, \Mpdf\HTMLParserMode::HEADER_CSS );
                $mpdf->WriteHTML( $html );

                $mpdf->Output( public_path('solicitaciones/').'solicitud'.$solicitud->id.'.pdf', \Mpdf\Output\Destination::FILE );

                if( file_exists( public_path('solicitaciones/').'solicitud'.$solicitud->id.'.pdf' ) ){

                    $datos['exito'] = true;

                }

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            
            $solicitud = Solicitud::create([

                'tipo' => $request->tipo,
                'derivacion' => $request->derivacion,
                'falla' => $request->falla,
                'prioridad' => $request->prioridad,
                'intervencion' => $request->intervencion,
                'necesidad' => $request->necesidad,
                'cliente' => $request->cliente,
                'email' => $request->email,
                'domicilio' => $request->domicilio,
                'telefono' => $request->telefono,
                'ciudad' => $request->ciudad,
                'plan' => $request->plan,
                'rut' => $request->rut,
                'relato' => $request->relato,
                'analisis' => $request->analisis,
                'idUser' => auth()->user()->id,

            ]);

            $datos['exito'] = true;

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        try {
            
            $solicitud = Solicitud::find( $request->id );

            if( $solicitud && $solicitud->id ){

                $datos['exito'] = true;
                $datos['name'] = $solicitud->usuario->name;
                $datos['cliente'] = $solicitud->cliente;
                $datos['email'] = $solicitud->email;
                $datos['domicilio'] = $solicitud->domicilio;
                $datos['telefono'] = $solicitud->telefono;
                $datos['ciudad'] = $solicitud->ciudad;
                $datos['plan'] = $solicitud->plan;
                $datos['rut'] = $solicitud->rut;
                $datos['necesidad'] = $solicitud->necesidad;
                $datos['relato'] = $solicitud->relato;
                $datos['analisis'] = $solicitud->analisis;
                $datos['falla'] = $solicitud->falla;
                $datos['prioridad'] = $solicitud->prioridad;
                $datos['intervencion'] = $solicitud->intervencion;
                $datos['tipo'] = $solicitud->tipo;
                $datos['derivacion'] = $solicitud->derivacion;
                $datos['id'] = $solicitud->id;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            
            $solicitud = Solicitud::where('id', '=', $request->id)
                        ->update([

                            'tipo' => $request->tipo,
                            'derivacion' => $request->derivacion,
                            'falla' => $request->falla,
                            'prioridad' => $request->prioridad,
                            'intervencion' => $request->intervencion,
                            'necesidad' => $request->necesidad,
                            'cliente' => $request->cliente,
                            'email' => $request->email,
                            'domicilio' => $request->domicilio,
                            'telefono' => $request->telefono,
                            'ciudad' => $request->ciudad,
                            'plan' => $request->plan,
                            'rut' => $request->rut,
                            'relato' => $request->relato,
                            'analisis' => $request->analisis,

                        ]);

            $datos['exito'] = true;

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            
            $solicitud = Solicitud::find( $request->id );

            if( $solicitud && $solicitud->id ){

                $solicitud->delete();

                $datos['exito'] = true;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }
}
