loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
<<<<<<< HEAD
			{ id: 'node1', value: { label: '1 | 2 | -1' } },
			{ id: 'node2', value: { label: '2 | 3 | -1' } },
			{ id: 'node3', value: { label: '3 | 2 | -1' } },
			{ id: 'node4', value: { label: '4 | 4 | -1' } },
			{ id: 'node5', value: { label: '5 | 4 | -1' } },
			{ id: 'node6', value: { label: '6 | 1 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'code1[2]' } },
			{ u: 'node0', v: 'node2', value: { label: 'code2[3]' } },
			{ u: 'node0', v: 'node3', value: { label: 'code3[2]' } },
			{ u: 'node1', v: 'node4', value: { label: 'code4[2]' } },
			{ u: 'node2', v: 'node5', value: { label: 'code5[1]' } },
			{ u: 'node0', v: 'node6', value: { label: 'code test[1]' } },
=======
			{ id: 'node1', value: { label: '1 | 5 | -1' } },
			{ id: 'node2', value: { label: '2 | 15 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'ABCD[5]' } },
			{ u: 'node0', v: 'node2', value: { label: 'SPRINT2[15]' } },
>>>>>>> 07eaaf69b06dfb90a5ce97a05d3a714050d92733
		 ]
	}
);