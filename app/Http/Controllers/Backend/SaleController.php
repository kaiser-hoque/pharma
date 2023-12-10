<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\sale;
use App\Models\customer;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Models\SaleDetails;
use App\Models\Stock;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sale=Sale::paginate(10);
        $sale=Sale::get();
        return view ('backend.sale.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::get();
        return view('backend.sale.create',  compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_search(Request $request)
    {
        if($request->name){
            $product=Medicine::select('id','bname as value','product_code as label')->where(function($query) use ($request) {
                        $query->where('bname','like', '%' . $request->name . '%')->orWhere('product_code','like', '%' . $request->name . '%');
                        })->get();
                      print_r(json_encode($product));
        }

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_search_data(Request $request)
    {
        if($request->item_id){
            $product=Medicine::where('id',$request->item_id)->first();
            $data='<tr class="text-center">';
            $data.='<td class="p-2">'.$product->bname.'<input name="medicine_id[]" type="hidden" value="'.$product->id.'"></td>';

            $data.='<td class="p-2"><input onkeyup="get_cal(this)" name="qty[]" type="text" class="form-control qty" value="0"></td>';
            $data.='<td class="p-2"><input onkeyup="get_cal(this)" name="price[]" type="text" value="'.$product->price.'" class="form-control price" value="0"></td>';
            $data.='<td class="p-2"><input onkeyup="get_cal(this)" name="tax[]" type="text" class="form-control tax" value=""></td>';
            $data.='<td class="p-2">
                        <select onchange="get_cal(this)" class="form-control form-select discount_type" name="discount_type[]">
                            <option value="0">%</option>
                            <option value="1">Fixed</option>
                        </select>
                    </td>';
            $data.='<td class="p-2"><input onkeyup="get_cal(this)" name="discount[]" type="text" class="form-control discount" value="0"></td>';
            $data.='<td class="p-2"><input name="unit_cost[]" readonly type="text" class="form-control unit_cost" value="0"></td>';
            $data.='<td class="p-2"><input name="subtotal[]" readonly type="text" class="form-control subtotal" value="0"></td>';
            $data.='<td class="p-2 text-danger"><i style="font-size:1.7rem" onclick="removerow(this)" class="fa fa-dash-circle-fill"></i></td>';
            $data.='</tr>';

            print_r(json_encode($data));
        }

    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $sale= new Sale;
            $sale->customer_id=$request->custname;
            $sale->sale_date = $request->sale_date;
            $sale->reference_no=$request->reference_no;
            $sale->total_quantity=$request->total_qty;
            $sale->sub_amount=$request->tsubtotal;
            $sale->discount_type=$request->discount_all_type;
            $sale->discount=$request->discount_all;
            $sale->other_charge=$request->tother_charge;
            $sale->round_of=$request->troundof;
            $sale->grand_total=$request->tgrandtotal;
            $sale->note=$request->note;
            $sale->created_by=currentUserId();
            $sale->payment_status=0;
            $sale->status=1;
            if($sale->save()){
                if($request->medicine_id){
                    foreach($request->medicine_id as $i=>$medicine_id){
                        $sd=new saleDetails;
                        $sd->sale_id=$sale->id;
                        $sd->medicine_id=$medicine_id;
                        $sd->quantity=$request->qty[$i];
                        $sd->unit_price=$request->price[$i];
                        $sd->tax=$request->tax[$i]>0?$request->tax[$i]:0;
                        $sd->discount_type=$request->discount_type[$i];
                        $sd->discount=$request->discount[$i];
                        $sd->sub_amount=$request->unit_cost[$i];
                        $sd->total_amount=$request->subtotal[$i];
                        if($sd->save()){
                            $stock=new Stock;
                            $stock->purchase_id=$pur->id;
                            $stock->medicine_id=$medicine_id;
                            $stock->quantity=$pd->quantity;
                            $stock->unit_price=($pd->total_amount / $pd->quantity);
                            $stock->tax=$pd->tax;
                            $stock->discount=$pd->discount;
                            $stock->save();
                            DB::commit();
                        }
                    }
                }
                \Toastr::success('Create Successfully!');
                return redirect()->route('sale.index');
            }
        }catch(Exception $e){
            DB::rollback();
            dd($e);
            \Toastr::warning('Please try again!');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sale $sale)
    {
        //
    }
}
