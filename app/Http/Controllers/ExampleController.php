<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class ExampleController extends Controller{
        public function showForm(){
            return view('example.form');
        }
   
        public function processForm(Request $request) {
            $n = max(1, (int) $request->input('n', 10));

            $sequence = [];
            $a = 0;
            $b = 1;

            for ($index = 0; $index < $n; $index++) {
                $sequence[] = $a;
                [$a, $b] = [$b, $a + $b];
            }

            return view('example.show', [
                'n' => $n,
                'sequence'=> $sequence
            ]);
        }
    }


?>