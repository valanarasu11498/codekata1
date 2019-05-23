#include <stdio.h>
#include<string.h>
int main()
{
    int a[10],k,n,c=0,i;
    scanf("%d %d",&n,&k);
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
    }
    for(i=0;i<n;i++)
    {
        if(a[i]==k)
        {
            printf("yes");
            return 0;
        }
        else
        {
            c=c+1;
        }
    }
    if(c==0)
    {
        printf("yes");
    }
    else
    {
    printf("no");
    }
    return 0;
}
