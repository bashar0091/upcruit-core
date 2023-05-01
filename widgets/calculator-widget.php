<?php
class calculator_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'calculator_widget';
	}

	public function get_title() {
		return esc_html__( 'Calculator', 'upcruit' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'calculator', 'upcruit' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'upcruit' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'upcruit' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Hello world', 'upcruit' ),
			]
		);

		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'upcruit' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'upcruit' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

		<div class="container">
			<div class="row g-5">
				<div class="col-lg-6 d-flex">
					<div class="money-calculator calculator-box" style="background: #e6e6e6;padding: 25px;">
						<h4 class="text-center mb-4 text4">How much money you could save</h4>
		
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="recruitAmount">Salary of role you're recruiting for:</label>
							</div>
		
							<div class="col-6">
								<div class="input-group">
									<span class="input-group-text bg-white rounded-0">£</span>
									<input type="text" id="recruitAmount" class="form-control border-start-0 focus-0 py-3 rounded-0 bg-white" placeholder="30,000">
								</div>
							</div>
						</div>
		
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">Recruitment agency fee rate:</label>
							</div>
		
							<div class="col-6">
								<select class="form-select py-3 rounded-0 focus-0" id="agencyFees">
									<option value="10">10%</option>
									<option value="12.5">12.5%</option>
									<option value="15">15%</option>
									<option value="17.5">17.5%</option>
									<option value="20">20%</option>
									<option value="25">25%</option>
									<option value="30">30%</option>
								</select>
							</div>
						</div>
		
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">No of people you recruit at once:</label>
							</div>
		
							<div class="col-6">
								<select class="form-select py-3 rounded-0 focus-0" id="recruitPeople">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
		
						<div class="row align-items-center calculator-input-box mb-4 d-none">
							<div class="col-6">
								<label for="">Response campaign price:</label>
							</div>
		
							<div class="col-6">
								<select class="form-select py-3 rounded-0 focus-0" id="campaignPrice">
									<option value="500">£500</option>
								</select>
							</div>
						</div>
		
						<div class="row align-items-center calculator-input-box">
							<div class="col-6">
								<label for="">Recruitment agency fees:</label>
							</div>
		
							<div class="col-6">
								<span class="text1"> £<span id="recruitTotal">0</span> </span>
							</div>
						</div>
		
						<hr class="my-5" style="background-color: #373737;">
		
						<div class="row align-items-top calculator-input-box">
							<div class="col-6">
								<span class="text2">Money saved:</span>
							</div>
		
							<div class="col-6">
								<span class="text3"> £<span id="recruitSavingsTotal">3000</span> </span>
								<br>
								<label>using our service versus a traditional recruitment agency. You’d save even more if you bought one of our multipacks.</label>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-lg-6 d-flex">
					<div class="time-calculator calculator-box" style="background: #e6e6e6;padding: 25px;">
						<h4 class="text-center mb-4 text4">How much time you could save</h4>
		
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">Select the job type:</label>
							</div>
		
							<div class="col-6" id="jobType"></div>
						</div> 
						
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">Choose the best job title:</label>
							</div>
		
							<div class="col-6" id="jobName"></div>
						</div>
						
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">Where is the job located:</label>
							</div>
		
							<div class="col-6" id="jobLocated"></div>
						</div>
		
						<div class="row align-items-center calculator-input-box mb-4">
							<div class="col-6">
								<label for="">Expected number of applications:</label>
							</div>
		
							<div class="col-6">
								<span class="text1" id="applicationNumber"></span>
							</div>
						</div>
		
						<div class="row align-items-center calculator-input-box">
							<div class="col-6">
								<label for="">Time spent assessing each CV:</label>
							</div>
		
							<div class="col-6" id="eachCv">
								<select class="form-select py-3 rounded-0 focus-0">
									<option value="120">2 min</option>
									<option value="300">5 min</option>
									<option value="600">10 min</option>
									<option value="900">15 min</option>
									<option value="1200">20 min</option>
								</select>
							</div>
						</div>
		
						<hr class="my-5" style="background-color: #373737;">
		
						<div class="row align-items-top calculator-input-box">
							<div class="col-6">
								<span class="text2">Time saved:</span>
							</div>
		
							<div class="col-6">
								<span class="text3" id="timeSaved"></span>
								<br>
								<label>using our service versus having your team assess the response.</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
	}
}
