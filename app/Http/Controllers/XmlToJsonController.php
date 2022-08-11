<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Inventory;
use Illuminate\Http\Request;
use SimpleXMLElement;

class XmlToJsonController extends Controller
{
    public function index()
    {
        include __DIR__ . '/bakuun.php';
        $new_xml = new SimpleXMLElement($xml);
        $json_encode_data = json_encode($new_xml, true);

        $companies = json_decode($json_encode_data, true);

        $comp_name = $companies['POS']['Source']['BookingChannel']['CompanyName'];
        $invHotelCode = $companies['Inventories']['@attributes']['HotelCode'];
        $inventories = $companies['Inventories']['Inventory'];
        $comp_type = $companies['POS']['Source']['BookingChannel']['@attributes']['Type'];
        $exit_name = Company::where('name', $comp_name)->first();
        if (empty($exit_name)) {
            $company = new Company();
            $company->name = $comp_name;
            $company->hotel_code = $invHotelCode;;
            $company->type = $comp_type;
            $company->save();
            if (!empty($company->id)) {
                foreach ($inventories as $inventory) {
                    $inv = new Inventory();
                    $inv->company_id = $company->id;
                    $inv->status_application_code = $inventory['StatusApplicationControl']['@attributes'];
                    $inv->inv_count = $inventory['InvCounts']['InvCount']['@attributes'];
                    $inv->save();
                }
            }
        }

        return response()->json(['status' => 200,'message'=>'data fetch', 'data' => $companies]);
    }

    public function restApi(Request $request)
    {
        $companies = Company::get();
        return response()->json(['status'=>400,'data'=>$companies]);
    }
}
