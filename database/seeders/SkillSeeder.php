<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ["name_en" => "Kaaledippu Reethikal", "name_ml" => "കാലെടിപ്പു രീതികൾ"],
            ["name_en" => "Meyyabhyaasangal", "name_ml" => "മെയ്യഭ്യാസങ്ങൾ"],
            ["name_en" => "Maappayattu", "name_ml" => "മെയ്പ്പയറ്റ്"],
            ["name_en" => "Chumattadi", "name_ml" => "ചുമട്ടടി"],
            ["name_en" => "Kaithadakal", "name_ml" => "കൈത്തടകൾ"],
            ["name_en" => "Vadi Veeshal", "name_ml" => "വടി വീശൽ"],
            ["name_en" => "Kaikkuthippayattu", "name_ml" => "കൈക്കുത്തിപ്പയറ്റ്"],
            ["name_en" => "Kalari Kettukal", "name_ml" => "കളരി കെട്ടുകൾ"],
            ["name_en" => "Valiya Vadi Aadavu", "name_ml" => "വലിയ വടി ആടവ്"],
            ["name_en" => "Cheru Vadi Aadavu", "name_ml" => "ചെറു വടി ആടവ്"],
            ["name_en" => "Poothara Vanakkam", "name_ml" => "പൂത്തറ വണക്കം"],
            ["name_en" => "Neettukadaara", "name_ml" => "നീട്ടുകഠാര"],
            ["name_en" => "Kachakkettal", "name_ml" => "കച്ചക്കെട്ടൽ"],
            ["name_en" => "Vadivukal", "name_ml" => "വടിവുകൾ"],
            ["name_en" => "Thalakkettukal", "name_ml" => "തളക്കെട്ടുകൾ"],
            ["name_en" => "Kettukaarippayattu", "name_ml" => "കെട്ടുകാരിപ്പയറ്റ്"],
            ["name_en" => "Muchaan Adavukal", "name_ml" => "മുച്ചാൺ അടവുകൾ"],
            ["name_en" => "Muchaan Payattu", "name_ml" => "മുച്ചാൺ പയറ്റ്"],
            ["name_en" => "Neettukadaara Adavukal", "name_ml" => "നീട്ടുകഠാര അടവുകൾ"],
            ["name_en" => "Neettukadaarappayattu", "name_ml" => "നീട്ടുകഠാരപ്പയറ്റ്"],
            ["name_en" => "Ponthippayattu", "name_ml" => "പൊന്തിപ്പയറ്റ്"],
            ["name_en" => "Udavaal Adavukal", "name_ml" => "ഉടവാൾ അടവുകൾ"],
            ["name_en" => "Udavaalppayattu", "name_ml" => "ഉടവാൾപ്പയറ്റ്"],
            ["name_en" => "Kuntham Adavukal", "name_ml" => "കുന്തം അടവുകൾ"],
            ["name_en" => "Kunthappayattu", "name_ml" => "കുന്തപ്പയറ്റ്"],
            ["name_en" => "Marappidicha Kuntham Adavukal", "name_ml" => "മറപ്പിടിച്ച കുന്തം അടവുകൾ"],
            ["name_en" => "Marappidicha Kunthappayattu", "name_ml" => "മറപ്പിടിച്ച കുന്തപ്പയറ്റ്"],
            ["name_en" => "Kathippayattu", "name_ml" => "കത്തിപ്പയറ്റ്"],
            ["name_en" => "Vettu Kathippayattu (Thiruthal)", "name_ml" => "വെട്ട് കത്തിപ്പയറ്റ് (തിരുത്തൽ)"],
            ["name_en" => "Udavaalppayattu", "name_ml" => "ഉടവാൾപ്പയറ്റ്"],
            ["name_en" => "Kathiyum Thalayum", "name_ml" => "കത്തിയുംത്തളയും"],
            ["name_en" => "Puliyankam (Vaalum Parichayum) Adavukal", "name_ml" => "പുലിയങ്കം (വാളും പരിചയും) അടവുകൾ"],
            ["name_en" => "Puliyankam (Vaalum Parichayum) Payattu", "name_ml" => "പുലിയങ്കം (വാളും പരിചയും) പയറ്റ്"],
            ["name_en" => "Churuttuvaal (Urumippayattu Adavukal)", "name_ml" => "ചുരുട്ടുവാൾ (ഉറുമിപ്പയറ്റ് അടവുകൾ)"],
            ["name_en" => "Churuttuvaal (Urumippayattu)", "name_ml" => "ചുരുട്ടുവാൾ (ഉറുമിപ്പയറ്റ്)"],
            ["name_en" => "Churuttuvaal (Urumi Veeshal)", "name_ml" => "ചുരുട്ടുവാൾ (ഉറുമി വീശൽ)"],
            ["name_en" => "Chottichaanpayattu", "name_ml" => "ചൊട്ടിച്ചാൺപ്പയറ്റ്"],
            ["name_en" => "Churikappayattu", "name_ml" => "ചുരികപ്പയറ്റ്"],
            ["name_en" => "Churika Adavukal", "name_ml" => "ചുരിക അടവുകൾ"],
            ["name_en" => "Verum Kaippayattu", "name_ml" => "വെറും കൈപ്പയറ്റ്"],
            ["name_en" => "Vaalvali", "name_ml" => "വാൾവലി"],
            ["name_en" => "Viral Prayogangal", "name_ml" => "വിരൽ പ്രയോഗങ്ങൾ"],
            ["name_en" => "Kalamchavittukal", "name_ml" => "കളംച്ചവിട്ടുകൾ"],
            ["name_en" => "Aayudhakkettukal", "name_ml" => "ആയുധക്കെട്ടുകൾ"],
            ["name_en" => "Ottappayattu", "name_ml" => "ഒറ്റപ്പയറ്റ്"]
        ];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill['name_en'], 'name_ml' => $skill['name_ml']]);
        }
    }
}
