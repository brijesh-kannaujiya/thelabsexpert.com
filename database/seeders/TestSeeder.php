<?php

namespace Database\Seeders;

use App\Models\Test;
use App\Models\TestPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::truncate();
        TestPackage::truncate();

        $tests = array(
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'TSH – Ultrasensitive',
                'test_code' => 'EXP0001',
                'mrp_price' => '4000',
                'price' => '2800',
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png',
                'banner' => 'admin/test/banner/banner.png',
                'short_desc' => 'Measures TSH levels to diagnose thyroid disorders. No fasting needed. Results in 24 hours.',
                'desc_1' => '<p>The TSH – Ultrasensitive test is a highly sensitive assay used to measure the concentration of Thyroid Stimulating Hormone (TSH) in the bloodstream. TSH is a critical hormone produced by the pituitary gland, playing a vital role in regulating the thyroid gland’s activity. This test helps diagnose and monitor thyroid disorders, including hypothyroidism (underactive thyroid) and hyperthyroidism (overactive thyroid). Unlike some blood tests, the TSH – Ultrasensitive test does not require fasting, making it convenient for patients. The test is quick, involving a simple blood draw, and results are typically available within 24 hours, providing timely information to guide treatment decisions. Accurate measurement of TSH levels can aid in assessing thyroid function and adjusting medication dosages effectively.</p>',
                'desc_2' => '<p>The TSH – Ultrasensitive test is an advanced diagnostic tool designed to precisely measure the levels of Thyroid Stimulating Hormone (TSH) in the blood. Produced by the pituitary gland, TSH regulates the production of hormones by the thyroid gland, which in turn controls metabolism, energy levels, and overall hormonal balance. Abnormal TSH levels can indicate thyroid dysfunctions such as hypothyroidism, characterized by fatigue, weight gain, and depression, or hyperthyroidism, marked by weight loss, rapid heartbeat, and anxiety. This test utilizes a highly sensitive method to detect even minute changes in TSH levels, providing an accurate assessment of thyroid function. The procedure is straightforward, involving a venipuncture to draw a blood sample, and does not require the patient to fast beforehand. Results are generally available within 24 hours, enabling quick diagnosis and the initiation of appropriate treatments. Early detection and accurate monitoring through the TSH – Ultrasensitive test can significantly improve patient outcomes by allowing for timely and precise adjustments in thyroid medication and management strategies</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'T3 - Total Triiodothyronine',
                'test_code' => 'EXP0002', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800',
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png', // Replace with actual path to banner
                'short_desc' => 'Measures T3 levels to assess thyroid function. No fasting required. Results available in 24 hours.',
                'desc_1' => '<p>The T3 - Total Triiodothyronine test measures the total amount of triiodothyronine, a thyroid hormone essential for regulating metabolism and energy levels. This test helps diagnose conditions such as hyperthyroidism and hypothyroidism by evaluating T3 levels in the bloodstream. Unlike some tests, fasting is not necessary, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of T3 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The T3 - Total Triiodothyronine test plays a crucial role in evaluating thyroid function by measuring the total triiodothyronine levels in the blood. Triiodothyronine, produced by the thyroid gland, influences metabolism, growth, and energy expenditure throughout the body. Abnormal T3 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test employs a reliable method to detect variations in T3 levels, providing an accurate assessment of thyroid health. The procedure involves a blood draw, without the need for fasting, ensuring patient comfort and convenience. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'T4 - Total Thyroxine',
                'test_code' => 'EXP0003', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800',
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png', // Replace with actual path to banner
                'short_desc' => 'Measures T4 levels to evaluate thyroid function. No fasting needed. Results in 24 hours.',
                'desc_1' => '<p>The T4 - Total Thyroxine test measures the total amount of thyroxine, a hormone produced by the thyroid gland. Thyroxine plays a crucial role in regulating metabolism, growth, and energy levels. This test helps diagnose thyroid disorders such as hyperthyroidism and hypothyroidism by assessing T4 levels in the bloodstream. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of T4 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The T4 - Total Thyroxine test is essential for evaluating thyroid function by measuring the total thyroxine levels in the blood. Thyroxine influences metabolism, growth, and energy expenditure throughout the body, making its measurement crucial in diagnosing thyroid disorders. Abnormal T4 levels can indicate conditions such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test employs a reliable method to detect variations in T4 levels, providing an accurate assessment of thyroid health. The procedure involves a blood draw, without the need for fasting, ensuring patient comfort and convenience. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti Thyroglobulin Antibody – Anti Tg',
                'test_code' => 'EXP0005', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800',
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png', // Replace with actual path to banner
                'short_desc' => 'Tests for Anti Thyroglobulin Antibodies to diagnose autoimmune thyroid disorders. Results in 24 hours.',
                'desc_1' => '<p>The Anti Thyroglobulin Antibody (Anti Tg) test detects the presence of antibodies that attack thyroglobulin, a protein produced by the thyroid gland. High levels of Anti Tg antibodies indicate autoimmune thyroid disorders such as Hashimoto\'s thyroiditis or Graves\' disease. This test does not require fasting, ensuring convenience for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Monitoring Anti Tg levels helps in diagnosing and managing autoimmune thyroid conditions effectively.</p>',
                'desc_2' => '<p>The Anti Thyroglobulin Antibody (Anti Tg) test is crucial for diagnosing autoimmune thyroid diseases by measuring antibodies that target thyroglobulin, a key protein in thyroid hormone production. Autoimmune thyroid disorders, characterized by the immune system attacking the thyroid gland, include Hashimoto\'s thyroiditis and Graves\' disease. Elevated Anti Tg antibody levels indicate an immune response against the thyroid, leading to thyroid dysfunction. This test employs a sensitive method to detect Anti Tg antibodies in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of autoimmune thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti TPO – Anti Thyroid Peroxidase Antibody',
                'test_code' => 'EXP0006', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800',
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png', // Replace with actual path to banner
                'short_desc' => 'Tests for Anti Thyroid Peroxidase Antibodies to diagnose autoimmune thyroid disorders. Results in 24 hours.',
                'desc_1' => '<p>The Anti Thyroid Peroxidase Antibody (Anti TPO) test detects antibodies that attack thyroid peroxidase, an enzyme involved in thyroid hormone production. Elevated levels of Anti TPO antibodies indicate autoimmune thyroid diseases such as Hashimoto\'s thyroiditis or Graves\' disease. This test does not require fasting, ensuring convenience for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Monitoring Anti TPO levels helps in diagnosing and managing autoimmune thyroid conditions effectively.</p>',
                'desc_2' => '<p>The Anti Thyroid Peroxidase Antibody (Anti TPO) test is essential for diagnosing autoimmune thyroid disorders by measuring antibodies that target thyroid peroxidase, an enzyme critical in thyroid hormone synthesis. Autoimmune thyroid diseases, including Hashimoto\'s thyroiditis and Graves\' disease, involve the immune system attacking the thyroid gland. Increased Anti TPO antibody levels indicate an autoimmune response against thyroid tissues, leading to thyroid dysfunction. This test utilizes a sensitive method to detect Anti TPO antibodies in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of autoimmune thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti TPO – Anti Thyroid Peroxidase Antibody',
                'test_code' => 'EXP0007', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '3200', // Different price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png', // Replace with actual path to banner
                'short_desc' => 'Tests for Anti Thyroid Peroxidase Antibodies to diagnose autoimmune thyroid disorders. Results in 24 hours.',
                'desc_1' => '<p>The Anti Thyroid Peroxidase Antibody (Anti TPO) test detects antibodies that attack thyroid peroxidase, an enzyme involved in thyroid hormone production. Elevated levels of Anti TPO antibodies indicate autoimmune thyroid diseases such as Hashimoto\'s thyroiditis or Graves\' disease. This test does not require fasting, ensuring convenience for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Monitoring Anti TPO levels helps in diagnosing and managing autoimmune thyroid conditions effectively.</p>',
                'desc_2' => '<p>The Anti Thyroid Peroxidase Antibody (Anti TPO) test is essential for diagnosing autoimmune thyroid disorders by measuring antibodies that target thyroid peroxidase, an enzyme critical in thyroid hormone synthesis. Autoimmune thyroid diseases, including Hashimoto\'s thyroiditis and Graves\' disease, involve the immune system attacking the thyroid gland. Increased Anti TPO antibody levels indicate an autoimmune response against thyroid tissues, leading to thyroid dysfunction. This test utilizes a sensitive method to detect Anti TPO antibodies in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of autoimmune thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti Thyroglobulin Antibody (Anti Tg)',
                'test_code' => 'EXP0008', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '3200', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'admin/test/icon/icon.png', // Replace with actual path to icon
                'banner' => 'admin/test/banner/banner.png',
                'short_desc' => 'Tests for Anti Thyroglobulin Antibodies to diagnose autoimmune thyroid disorders. Results in 24 hours.',
                'desc_1' => '<p>The Anti Thyroglobulin Antibody (Anti Tg) test detects antibodies that attack thyroglobulin, a protein produced by the thyroid gland. High levels of Anti Tg antibodies indicate autoimmune thyroid disorders such as Hashimoto\'s thyroiditis or Graves\' disease. This test does not require fasting, ensuring convenience for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Monitoring Anti Tg levels helps in diagnosing and managing autoimmune thyroid conditions effectively.</p>',
                'desc_2' => '<p>The Anti Thyroglobulin Antibody (Anti Tg) test is crucial for diagnosing autoimmune thyroid disorders by measuring antibodies that target thyroglobulin, a key protein in thyroid hormone production. Autoimmune thyroid diseases, characterized by the immune system attacking the thyroid gland, include Hashimoto\'s thyroiditis and Graves\' disease. Elevated Anti Tg antibody levels indicate an immune response against the thyroid, leading to thyroid dysfunction. This test employs a sensitive method to detect Anti Tg antibodies in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of autoimmune thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'T3 - Total Triiodothyronine',
                'test_code' => 'EXP0009', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/t3_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/t3_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures T3 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The T3 - Total Triiodothyronine test measures the total amount of triiodothyronine (T3) hormone in the bloodstream. T3 is one of the thyroid hormones responsible for regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing T3 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of T3 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The T3 - Total Triiodothyronine test is essential for evaluating thyroid function by measuring the total amount of T3 hormone in the blood. T3 plays a crucial role in regulating metabolism, growth, and energy expenditure throughout the body. Abnormal T3 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect T3 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'T4 - Total Thyroxine',
                'test_code' => 'EXP00010', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/t4_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/t4_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures T4 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The T4 - Total Thyroxine test measures the total amount of thyroxine (T4) hormone in the bloodstream. T4 is a key thyroid hormone that plays a crucial role in regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing T4 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of T4 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The T4 - Total Thyroxine test is essential for evaluating thyroid function by measuring the total amount of T4 hormone in the blood. T4 influences metabolism, energy production, and overall body function. Abnormal T4 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect T4 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],

            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'TSH - Ultrasensitive',
                'test_code' => 'EXP0011', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/tsh_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/tsh_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures TSH levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The TSH - Ultrasensitive test is a highly sensitive assay used to measure the concentration of Thyroid Stimulating Hormone (TSH) in the bloodstream. TSH is a critical hormone produced by the pituitary gland, playing a vital role in regulating the thyroid gland’s activity. This test helps diagnose and monitor thyroid disorders, including hypothyroidism (underactive thyroid) and hyperthyroidism (overactive thyroid). Unlike some blood tests, the TSH - Ultrasensitive test does not require fasting, making it convenient for patients. The test is quick, involving a simple blood draw, and results are typically available within 24 hours, providing timely information to guide treatment decisions. Accurate measurement of TSH levels can aid in assessing thyroid function and adjusting medication dosages effectively.</p>',
                'desc_2' => '<p>The TSH - Ultrasensitive test is an advanced diagnostic tool designed to precisely measure the levels of Thyroid Stimulating Hormone (TSH) in the blood. Produced by the pituitary gland, TSH regulates the production of hormones by the thyroid gland, which in turn controls metabolism, energy levels, and overall hormonal balance. Abnormal TSH levels can indicate thyroid dysfunctions such as hypothyroidism, characterized by fatigue, weight gain, and depression, or hyperthyroidism, marked by weight loss, rapid heartbeat, and anxiety. This test utilizes a highly sensitive method to detect even minute changes in TSH levels, providing an accurate assessment of thyroid function. The procedure is straightforward, involving a venipuncture to draw a blood sample, and does not require the patient to fast beforehand. Results are generally available within 24 hours, enabling quick diagnosis and the initiation of appropriate treatments. Early detection and accurate monitoring through the TSH - Ultrasensitive test can significantly improve patient outcomes by allowing for timely and precise adjustments in thyroid medication and management strategies.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'FT3 - Free Triiodothyronine',
                'test_code' => 'EXP0012', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/ft3_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/ft3_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures FT3 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The FT3 - Free Triiodothyronine test measures the concentration of free triiodothyronine (FT3) hormone in the bloodstream. FT3 is an active form of thyroid hormone that plays a crucial role in regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing FT3 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of FT3 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The FT3 - Free Triiodothyronine test is essential for evaluating thyroid function by measuring the levels of free triiodothyronine (FT3) hormone in the blood. FT3 influences metabolism, energy production, and overall body function. Abnormal FT3 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect FT3 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'FT4 - Free Thyroxine',
                'test_code' => 'EXP0013', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/ft4_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/ft4_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures FT4 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The FT4 - Free Thyroxine test measures the concentration of free thyroxine (FT4) hormone in the bloodstream. FT4 is an active form of thyroid hormone that plays a crucial role in regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing FT4 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of FT4 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The FT4 - Free Thyroxine test is essential for evaluating thyroid function by measuring the levels of free thyroxine (FT4) hormone in the blood. FT4 influences metabolism, energy production, and overall body function. Abnormal FT4 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect FT4 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'TSH - Ultrasensitive',
                'test_code' => 'EXP0014', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/tsh_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/tsh_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures TSH levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The TSH - Ultrasensitive test is a highly sensitive assay used to measure the concentration of Thyroid Stimulating Hormone (TSH) in the bloodstream. TSH is a critical hormone produced by the pituitary gland, playing a vital role in regulating the thyroid gland’s activity. This test helps diagnose and monitor thyroid disorders, including hypothyroidism (underactive thyroid) and hyperthyroidism (overactive thyroid). Unlike some blood tests, the TSH - Ultrasensitive test does not require fasting, making it convenient for patients. The test is quick, involving a simple blood draw, and results are typically available within 24 hours, providing timely information to guide treatment decisions. Accurate measurement of TSH levels can aid in assessing thyroid function and adjusting medication dosages effectively.</p>',
                'desc_2' => '<p>The TSH - Ultrasensitive test is an advanced diagnostic tool designed to precisely measure the levels of Thyroid Stimulating Hormone (TSH) in the blood. Produced by the pituitary gland, TSH regulates the production of hormones by the thyroid gland, which in turn controls metabolism, energy levels, and overall hormonal balance. Abnormal TSH levels can indicate thyroid dysfunctions such as hypothyroidism, characterized by fatigue, weight gain, and depression, or hyperthyroidism, marked by weight loss, rapid heartbeat, and anxiety. This test utilizes a highly sensitive method to detect even minute changes in TSH levels, providing an accurate assessment of thyroid function. The procedure is straightforward, involving a venipuncture to draw a blood sample, and does not require the patient to fast beforehand. Results are generally available within 24 hours, enabling quick diagnosis and the initiation of appropriate treatments. Early detection and accurate monitoring through the TSH - Ultrasensitive test can significantly improve patient outcomes by allowing for timely and precise adjustments in thyroid medication and management strategies.</p>',
            ], [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'FT3 - Free Triiodothyronine',
                'test_code' => 'EXP0015', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/ft3_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/ft3_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures FT3 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The FT3 - Free Triiodothyronine test measures the concentration of free triiodothyronine (FT3) hormone in the bloodstream. FT3 is an active form of thyroid hormone that plays a crucial role in regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing FT3 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of FT3 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The FT3 - Free Triiodothyronine test is essential for evaluating thyroid function by measuring the levels of free triiodothyronine (FT3) hormone in the blood. FT3 influences metabolism, energy production, and overall body function. Abnormal FT3 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect FT3 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'FT4 - Free Thyroxine',
                'test_code' => 'EXP0016', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/ft4_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/ft4_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures FT4 levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The FT4 - Free Thyroxine test measures the concentration of free thyroxine (FT4) hormone in the bloodstream. FT4 is an active form of thyroid hormone that plays a crucial role in regulating metabolism, growth, and energy levels in the body. This test helps diagnose and monitor thyroid disorders such as hyperthyroidism and hypothyroidism by assessing FT4 levels. Fasting is not required, making it convenient for patients. Results are typically available within 24 hours, providing timely information for medical decision-making. Accurate measurement of FT4 levels aids in assessing thyroid function and guiding treatment adjustments effectively.</p>',
                'desc_2' => '<p>The FT4 - Free Thyroxine test is essential for evaluating thyroid function by measuring the levels of free thyroxine (FT4) hormone in the blood. FT4 influences metabolism, energy production, and overall body function. Abnormal FT4 levels can indicate thyroid disorders such as hyperthyroidism, characterized by weight loss, rapid heartbeat, and nervousness, or hypothyroidism, marked by weight gain, fatigue, and cold intolerance. This test utilizes a reliable method to detect FT4 levels in the blood, without requiring fasting, ensuring patient comfort. Rapid turnaround time of results, typically within 24 hours, facilitates prompt diagnosis and initiation of appropriate treatments, thereby improving patient care and management of thyroid conditions.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'TSH - Ultrasensitive',
                'test_code' => 'EXP0017', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/tsh_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/tsh_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures TSH levels to assess thyroid function. Results available in 24 hours.',
                'desc_1' => '<p>The TSH - Ultrasensitive test is a highly sensitive assay used to measure the concentration of Thyroid Stimulating Hormone (TSH) in the bloodstream. TSH is a critical hormone produced by the pituitary gland, playing a vital role in regulating the thyroid gland’s activity. This test helps diagnose and monitor thyroid disorders, including hypothyroidism (underactive thyroid) and hyperthyroidism (overactive thyroid). Unlike some blood tests, the TSH - Ultrasensitive test does not require fasting, making it convenient for patients. The test is quick, involving a simple blood draw, and results are typically available within 24 hours, providing timely information to guide treatment decisions. Accurate measurement of TSH levels can aid in assessing thyroid function and adjusting medication dosages effectively.</p>',
                'desc_2' => '<p>The TSH - Ultrasensitive test is an advanced diagnostic tool designed to precisely measure the levels of Thyroid Stimulating Hormone (TSH) in the blood. Produced by the pituitary gland, TSH regulates the production of hormones by the thyroid gland, which in turn controls metabolism, energy levels, and overall hormonal balance. Abnormal TSH levels can indicate thyroid dysfunctions such as hypothyroidism, characterized by fatigue, weight gain, and depression, or hyperthyroidism, marked by weight loss, rapid heartbeat, and anxiety. This test utilizes a highly sensitive method to detect even minute changes in TSH levels, providing an accurate assessment of thyroid function. The procedure is straightforward, involving a venipuncture to draw a blood sample, and does not require the patient to fast beforehand. Results are generally available within 24 hours, enabling quick diagnosis and the initiation of appropriate treatments. Early detection and accurate monitoring through the TSH - Ultrasensitive test can significantly improve patient outcomes by allowing for timely and precise adjustments in thyroid medication and management strategies.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti TPO – Anti Thyroid Peroxidase Antibody',
                'test_code' => 'EXP0018', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/anti_tpo_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/anti_tpo_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures Anti TPO antibodies to diagnose autoimmune thyroid disorders. Results available in 24 hours.',
                'desc_1' => '<p>The Anti TPO – Anti Thyroid Peroxidase Antibody test measures the presence of antibodies against thyroid peroxidase (TPO) in the bloodstream. TPO is an enzyme involved in the production of thyroid hormones. Elevated levels of anti-TPO antibodies indicate autoimmune thyroid disorders such as Hashimoto’s thyroiditis or Graves’ disease. This test does not require fasting and provides results within 24 hours. It helps in diagnosing and monitoring autoimmune thyroid conditions, guiding appropriate treatment strategies for patients.</p>',
                'desc_2' => '<p>The Anti TPO – Anti Thyroid Peroxidase Antibody test is crucial for detecting autoimmune thyroid disorders by measuring antibodies against thyroid peroxidase (TPO) in the blood. These antibodies are indicators of immune system attacks on the thyroid gland, leading to conditions like Hashimoto’s thyroiditis and Graves’ disease. Early detection through this test allows timely intervention and management of thyroid autoimmune diseases. The procedure involves a simple blood draw, and results are typically available within 24 hours, facilitating prompt diagnosis and treatment planning. Monitoring anti-TPO antibody levels helps healthcare providers assess disease progression and adjust treatment regimens effectively.</p>',
            ],
            [
                'category_id' => 1,
                'vial_id' => 1,
                'specimen_id' => 1,
                'test_name' => 'Anti Tg – Anti Thyroglobulin Antibody',
                'test_code' => 'EXP0019', // Replace with appropriate test code
                'mrp_price' => '4000',
                'price' => '2800', // Replace with actual price
                'report_date' => '24 hours',
                'fasting' => 'Not required',
                'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
                'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
                'icon' => 'https://example.com/icons/anti_tg_icon.png', // Replace with actual URL to icon image
                'banner' => 'https://example.com/banners/anti_tg_banner.png', // Replace with actual URL to banner image
                'short_desc' => 'Measures Anti Thyroglobulin Antibodies to diagnose thyroid autoimmune disorders. Results in 24 hours.',
                'desc_1' => '<p>The Anti Tg – Anti Thyroglobulin Antibody test measures the presence of antibodies against thyroglobulin in the bloodstream. Thyroglobulin is a protein produced by the thyroid gland. Elevated levels of anti-thyroglobulin antibodies indicate autoimmune thyroid disorders such as Hashimoto’s thyroiditis or Graves’ disease. This test does not require fasting and provides results within 24 hours. It helps in diagnosing and monitoring thyroid autoimmune conditions, guiding appropriate treatment strategies for patients.</p>',
                'desc_2' => '<p>The Anti Tg – Anti Thyroglobulin Antibody test is essential for detecting autoimmune thyroid disorders by measuring antibodies against thyroglobulin in the blood. These antibodies are indicators of immune system attacks on the thyroid gland, leading to conditions like Hashimoto’s thyroiditis and Graves’ disease. Early detection through this test allows timely intervention and management of thyroid autoimmune diseases. The procedure involves a simple blood draw, and results are typically available within 24 hours, facilitating prompt diagnosis and treatment planning. Monitoring anti-thyroglobulin antibody levels helps healthcare providers assess disease progression and adjust treatment regimens effectively.</p>',
            ],
        );

        foreach ($tests as $test) {

            // $lastRecord = Test::latest()->withTrashed()->first();
            // if ($lastRecord) {
            //     $lastId = $lastRecord->id;
            //     $test_code = 'EXP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
            // } else {
            //     $test_code = 'EXP0001';
            // }

            Test::create([
                'category_id' => $test['category_id'],
                'vial_id' => $test['vial_id'],
                'specimen_id' => $test['specimen_id'],
                'test_name' => $test['test_name'],
                'test_code' => $test['test_code'], // Replace with appropriate test code
                'mrp_price' => $test['mrp_price'],
                'price' => $test['price'], // Replace with actual price
                'report_date' => $test['report_date'],
                'fasting' => $test['fasting'],
                'customer_instructions' => $test['customer_instructions'],
                'phlebo_instructions' => $test['phlebo_instructions'],
                'icon' => 'admin/test/icon/icon.png',
                'banner' => 'admin/test/banner/banner.png',
                'short_desc' => $test['short_desc'],
                'desc_1' => $test['desc_1'],
                'desc_2' => $test['desc_2'],
            ]);
        }

        // Test::create([
        //     'category_id' => 1,
        //     'vial_id' => 1,
        //     'specimen_id' => 1,
        //     'test_name' => 'TSH – Ultrasensitive',
        //     'test_code' => 'EXP0001',
        //     'mrp_price' => '4000',
        //     'price' => '2800',
        //     'report_date' => '24 hours',
        //     'fasting' => 'Not required',
        //     'customer_instructions' => 'Continue medications. No fasting. Wear comfortable clothing for easy blood sample collection.',
        //     'phlebo_instructions' => 'Prepare supplies, verify patient, explain procedure, collect sample, label vial, store, and deliver promptly.',
        //     'icon' => 'admin/test/icon/icon.png',
        //     'banner' => 'admin/test/banner/banner.png',
        //     'short_desc' => 'Measures TSH levels to diagnose thyroid disorders. No fasting needed. Results in 24 hours.',
        //     'desc_1' => '<p>The TSH – Ultrasensitive test is a highly sensitive assay used to measure the concentration of Thyroid Stimulating Hormone (TSH) in the bloodstream. TSH is a critical hormone produced by the pituitary gland, playing a vital role in regulating the thyroid gland’s activity. This test helps diagnose and monitor thyroid disorders, including hypothyroidism (underactive thyroid) and hyperthyroidism (overactive thyroid). Unlike some blood tests, the TSH – Ultrasensitive test does not require fasting, making it convenient for patients. The test is quick, involving a simple blood draw, and results are typically available within 24 hours, providing timely information to guide treatment decisions. Accurate measurement of TSH levels can aid in assessing thyroid function and adjusting medication dosages effectively.</p>',
        //     'desc_2' => '<p>The TSH – Ultrasensitive test is an advanced diagnostic tool designed to precisely measure the levels of Thyroid Stimulating Hormone (TSH) in the blood. Produced by the pituitary gland, TSH regulates the production of hormones by the thyroid gland, which in turn controls metabolism, energy levels, and overall hormonal balance. Abnormal TSH levels can indicate thyroid dysfunctions such as hypothyroidism, characterized by fatigue, weight gain, and depression, or hyperthyroidism, marked by weight loss, rapid heartbeat, and anxiety. This test utilizes a highly sensitive method to detect even minute changes in TSH levels, providing an accurate assessment of thyroid function. The procedure is straightforward, involving a venipuncture to draw a blood sample, and does not require the patient to fast beforehand. Results are generally available within 24 hours, enabling quick diagnosis and the initiation of appropriate treatments. Early detection and accurate monitoring through the TSH – Ultrasensitive test can significantly improve patient outcomes by allowing for timely and precise adjustments in thyroid medication and management strategies</p>',
        // ]);
    }
}
