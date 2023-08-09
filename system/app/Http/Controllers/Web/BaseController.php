<?php

namespace App\Http\Controllers\Web;

use App\Models\Bangunan;
use App\Models\Jembatan;
use App\Models\Opd;
use App\Http\Controllers\Controller;
use App\Models\Peralatan;
use App\Models\Tanah;
use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


class BaseController extends Controller
{
    public function index()
    {
        $data['list_peralatan'] = Peralatan::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_tanah'] = Tanah::all();
        $data['list_jembatan'] = Jembatan::all();
        $data['list_opd'] = Opd::all();
        return view('web.index', $data);
    }

    public function aset($opd)
    {
        $data['opd'] = Opd::find($opd);
        $data['list_opd'] = Opd::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_peralatan'] = Peralatan::all();
        $data['list_jembatan'] = $list_jembatan = Jembatan::all();
        $data['list_tanah'] = Tanah::all();
 
        foreach($list_jembatan as $jembatan){ 

            $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($jembatan->kode_aset)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(100)
            ->margin(0)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText($jembatan->nama_aset)
            ->labelFont(new NotoSans(10))
            ->labelAlignment(new LabelAlignmentCenter())
            ->build();
        
        $data['img'] = $result->getDataUri();
        }
        
        return view('web.aset', $data);
    }

    public function bahaya()
    {
        $data['list_opd'] = Opd::all();
        return view('web.contact', $data);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
