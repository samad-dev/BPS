<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessUnitController extends Controller
{
    public function index()
    {
        $businessUnits = DB::select('SELECT s.*,IFNULL(c.name,"System") as company FROM `business_units` s left join company c on s.company_id = c.id;');
        return response()->json($businessUnits);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::insert('INSERT INTO business_units (company_id, marketing_manager, store_manager, bu_user, name, email, phone, alternate_phone, address_1, address_2, latitude, longitude, city, state, country, zipcode, status, properties) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$data['company_id'], $data['marketing_manager'], $data['store_manager'], $data['bu_user'], $data['name'], $data['email'], $data['phone'], $data['alternate_phone'], $data['address_1'], $data['address_2'], $data['latitude'], $data['longitude'], $data['city'], $data['state'], $data['country'], $data['zipcode'], $data['status'], $data['properties']]);
        $insertedId = DB::getPdo()->lastInsertId();

        if ($insertedId) {
            return response()->json(['message' => 'Business unit created successfully', 'inserted_id' => $insertedId]);
        } else {
            return response()->json(['message' => 'Failed to create business unit'], 500);
        }
    }

    public function show($id)
    {
        $businessUnit = DB::select('SELECT * FROM business_units WHERE id = ?', [$id]);
        return response()->json($businessUnit);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::update('UPDATE business_units SET company_id = ?, marketing_manager = ?, store_manager = ?, bu_user = ?, name = ?, email = ?, phone = ?, alternate_phone = ?, address_1 = ?, address_2 = ?, latitude = ?, longitude = ?, city = ?, state = ?, country = ?, zipcode = ?, status = ?, properties = ? WHERE id = ?',
            [$data['company_id'], $data['marketing_manager'], $data['store_manager'], $data['bu_user'], $data['name'], $data['email'], $data['phone'], $data['alternate_phone'], $data['address_1'], $data['address_2'], $data['latitude'], $data['longitude'], $data['city'], $data['state'], $data['country'], $data['zipcode'], $data['status'], $data['properties'], $id]);
        return response()->json(['message' => 'Business unit updated successfully']);
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM business_units WHERE id = ?', [$id]);
        return response()->json(['message' => 'Business unit deleted successfully']);
    }
}
