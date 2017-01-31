@extends('layouts.app')

@section('content')

@include('layouts.menu')

<div class="container">
    <div class="row buff">

        <div class="twelve columns panel">
        	<div class="month"> 
		  		<ul>
				    <li class="prev">&#10094;</li>
				    <li class="next">&#10095;</li>
				    <li> Augusti 2016 </li>
			  	</ul>
			</div>

			<ul class="weekdays">
				<li>Mån</li>
				<li>Tis</li>
				<li>Ons</li>
				<li>Tor</li>
				<li>Fre</li>
				<li>Lör</li>
				<li>Sön</li>
			</ul>

			<ul class="days"> 
				<li>
					1
					<span class="todo-1"><span class="todo-text">BOKA NU Kampanj</span></span>
				</li
				><li>
					2
					<span class="todo-1"></span>
				</li
				><li>
					3
					<span class="todo-1"></span>
				</li
				><li>
					4
					<span class="todo-1"></span>
				</li
				><li>
					5
					<span class="todo-1"></span>
				</li
				><li>
					6
					<span class="todo-1"></span>
				</li
				><li>
					7
					<span class="todo-1"></span>
				</li
				><li>
					8
					<span class="todo-1"></span>
				</li
				><li>
					9
					<span class="todo-1"></span>
				</li
				><li>
					<span class="active">10</span>
					<span class="todo-1"></span>
					<span class="todo-2"><span class="todo-text">Uppdatera rubrik</span></span>
				</li
				><li>
					11
					<span class="todo-1"></span>
					<span class="todo-2"></span>
				</li
				><li>
					12
					<span class="todo-2"></span>
				</li
				><li>
					13
					<span class="todo-2"></span>
				</li
				><li>
					14
					<span class="todo-2"></span>
				</li
				><li>
					15
					<span class="todo-2"></span>
				</li
				><li>16</li
				><li>17</li
				><li>18</li
				><li>19</li
				><li>20</li
				><li>21</li
				><li>22</li
				><li>
					23
					<span class="todo-3"><span class="todo-text">Annons GP</span></span>
				</li
				><li>24</li
				><li>25</li
				><li>26</li
				><li>27</li
				><li>28</li
				><li>29</li
				><li>30</li
				><li>31</li>
			</ul>
        </div>
    </div>

    <div class="row buff">
        <div class="one-third column panel">
        	<h2 class="icon-heading text-center">Beställningar</h2>
			<div class="form-item">
				<div class="form-date"><span class="date-date">12</span><span class="date-month">Aug</span></div>
				<div class="form-info">
					<span class="form-name">Kampanjbrief</span>
        			<span class="form-heading">BOKA NU Kampanj</span>
    			</div>
    			<div class="form-action">
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-commenting" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-eye" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn accept"><i class="fa fa-check" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="form-item">
				<div class="form-date"><span class="date-date">16</span><span class="date-month">Aug</span></div>
				<div class="form-info">
					<span class="form-name">Webb ändring</span>
        			<span class="form-heading">Uppdatera rubrik</span>
    			</div>
    			<div class="form-action">
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-commenting" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-eye" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn accept"><i class="fa fa-check" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="form-item">
				<div class="form-date"><span class="date-date">24</span><span class="date-month">Aug</span></div>
				<div class="form-info">
					<span class="form-name">Annons 400x200</span>
        			<span class="form-heading">Annons GP</span>
    			</div>
    			<div class="form-action">
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-commenting" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn default"><i class="fa fa-eye" aria-hidden="true"></i></a>
    				<a class="btn square-btn tiny-btn accept"><i class="fa fa-check" aria-hidden="true"></i></a>
				</div>
			</div>
        </div>
         <div class="one-third column panel">
        	<h2 class="icon-heading text-center">Pågående</h2>
        		
        </div>
         <div class="one-third column panel">
        	<h2 class="icon-heading text-center">Klart</h2>
        		
        </div>
    </div>
</div>
@endsection
